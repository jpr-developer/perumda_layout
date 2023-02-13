<?php

namespace App\Http\Controllers\Mitra;

use App\Exports\Supplier\SupplierTransactionExport;
use App\Exports\SupplierExport;
use App\Http\Controllers\Controller;
use App\Imports\Supplier\SupplierCategoryImport;
use App\Imports\Supplier\SupplierImport;
use App\Imports\Supplier\SupplierSubCategoryImport;
use App\Models\PurchaseTransaction;
use App\Models\PurchaseTransactionDetail;
use App\Models\Supplier;
use App\Models\SupplierCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class SupplierController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->filter;
        $suppliers = Supplier::select('code', 'name', 'supplier_category_id', 'status')
                                ->where('supplier_category_id', 'like', '%'.$filter.'%')
                                ->paginate(10);
        $supplierCategories = SupplierCategory::select('id', 'name')->get();
        return view('mitra.supplier.index', compact('suppliers','filter', 'supplierCategories'));
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {

            $search = $request->search;

            $suppliers = Supplier::where('name', 'like', '%'.$search.'%')
                                    ->select('code', 'name', 'supplier_category_id', 'status')
                                    ->paginate(10);

            $remappSuppliers = [];
            foreach ($suppliers as $value) {
                $data = [
                    'code' => $value->code,
                    'name' => $value->name,
                    'supplier_category' => $value->supplierCategory->name,
                    'status' => $value->status
                ];

                array_push($remappSuppliers, $data);
            }

            $response = [
                'suppliers' => $remappSuppliers
            ];

            return response($response);

        }
    }

    public function detail(Request $request, $code)
    {
        $supplier = Supplier::where('code', $code)->first();
        $transactions = PurchaseTransaction::where('supplier_id', $supplier->id)
                                                ->select('code', 'supplier_id', 'date', 'nominal')
                                                ->paginate(5);
        return view('mitra.supplier.detail', compact('supplier', 'transactions'));
    }

    public function import(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'supplier_import' => 'required|mimes:xlsx,txt',
            ]);

            if ($validator->fails()) {

                Alert::toast('Format file harus .xlsx', 'error');
                return back();
            }

            // Check data

            Excel::queueImport(new SupplierCategoryImport, $request->supplier_import);
            Excel::queueImport(new SupplierSubCategoryImport, $request->supplier_import);

            Excel::queueImport(new SupplierImport, $request->supplier_import);

            Alert::toast('File berhasil diimport', 'success');
            return back();

        }
    }

    public function export()
    {
        return Excel::download(new SupplierExport, 'supplier.xlsx');
    }

    // Detail Transaksi
    public function detail_transaction($code_sp, $code_tr)
    {
        $transaction = PurchaseTransaction::where('code', $code_tr)->first();
        $transactionDetails = PurchaseTransactionDetail::where('purchase_transaction_id', $transaction->id)->get();
        return view('mitra.supplier.detail-transaksi', compact('transaction', 'transactionDetails', 'code_sp'));

    }

    public function chart($code)
    {
        $supplier = Supplier::where('code', $code)->first();
        $supplierTransactions = new PurchaseTransaction();

        // Get Years
        $years = $supplierTransactions->getYears($supplier->id);

        // Get Months
        $months = $supplierTransactions->getMonths($supplier->id, Carbon::now()->format('Y'));

        // Get Total Transactions
        $totalTransactions = $supplierTransactions->getTotalTransactions($supplier->id, Carbon::now()->format('Y'));


        $response = [
            'total' => $totalTransactions,
            'months' => $months,
            'years' => $years
        ];

        return response($response);


    }

    public function chart_filter(Request $request, $code)
    {
        // Get supplier
        $supplier = Supplier::where('code', $code)->first();
        $year = $request->year;

        $transaction = new PurchaseTransaction();

        $getMonths = $transaction->getMonths($supplier->id, $year);

        $getTotal = $transaction->getTotalTransactions($supplier->id, $year);

        $response = [
            'total' => $getTotal,
            'months' => $getMonths,
            'year' => $year
        ];

        return response($response);
    }

    public function export_transaction($supplier_id)
    {
        $supplier = Supplier::where('id', $supplier_id)->first();
        return Excel::download(new SupplierTransactionExport($supplier_id), $supplier->name.'.xlsx');
    }
}
