<?php

namespace App\Http\Controllers\Mitra;

use App\Exports\SupplierExport;
use App\Http\Controllers\Controller;
use App\Imports\Supplier\SupplierCategoryImport;
use App\Imports\Supplier\SupplierImport;
use App\Imports\Supplier\SupplierSubCategoryImport;
use App\Imports\Supplier\Transaction\SupplierTransactionDetailImport;
use App\Imports\Supplier\Transaction\SupplierTransactionImport;
use App\Models\Supplier;
use App\Models\SupplierCategory;
use App\Models\SupplierTransaction;
use App\Models\SupplierTransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
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

    public function detail($code)
    {
        $supplier = Supplier::where('code', $code)->first();

        $supplierTransactions = SupplierTransaction::select('code', 'date', 'nominal')
                                                        ->where('supplier_id', $supplier->id)
                                                        ->paginate(5);


        return view('mitra.supplier.detail', compact('supplier','supplierTransactions'));
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


    //Import Transaksi Supplier
    public function import_transaction(Request $request, $supplier_id)
    {

        Excel::queueImport(new SupplierTransactionImport($supplier_id), $request->supplier_transaction_import);
        Excel::queueImport(new SupplierTransactionDetailImport, $request->supplier_transaction_import);

        Alert::toast('File berhasil diimport', 'success');
        return back();


    }

    // Detail Transaksi
    public function detail_transaction($code_sp, $code_tr)
    {
        $transaction = SupplierTransaction::where('code', $code_tr)->first();


        $transaction_details = SupplierTransactionDetail::where('supplier_transaction_id', $transaction->id)->get();


        return view('mitra.supplier.detail-transaksi', compact('transaction', 'transaction_details', 'code_sp'));

    }

    public function chart($code)
    {
        $supplier = Supplier::where('code', $code)->first();

        $getTotalByMonth = SupplierTransaction::where(
            DB::raw("DATE_FORMAT(date, '%Y')"), Carbon::now()->format('Y')
        )
        ->where('supplier_id', $supplier->id)
        ->select(
            DB::raw("SUM(nominal) as total")
        )
        ->groupBy(
            DB::raw("DATE_FORMAT(date, '%Y-%m')")
        )
        ->orderBy(
            DB::raw("DATE_FORMAT(date, '%Y-%m')")
        )
        ->get();

        $a = count($getTotalByMonth);
        $remapp = [];
        for ($j=0; $j < $a ; $j++) {
            array_push($remapp, $getTotalByMonth[$j]['total']);
        }
        for ($i=0; $i < 12-$a ; $i++) {
            array_push($remapp, 0);
        }

        $month = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus',
            'September', 'Oktober', 'November', 'Desember'
        ];

        $response = [
            'total' => $remapp,
            'month' => $month
        ];

        return response($response);
    }
}
