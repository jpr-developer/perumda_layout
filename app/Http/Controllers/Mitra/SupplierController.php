<?php

namespace App\Http\Controllers\Mitra;

use App\Exports\SupplierExport;
use App\Http\Controllers\Controller;
use App\Imports\SupplierImport;
use App\Models\Supplier;
use App\Models\SupplierCategory;
use Illuminate\Http\Request;
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

    public function detail($code)
    {
        $supplier = Supplier::where('code', $code)->first();
        return view('mitra.supplier.detail', compact('supplier'));
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

            $suppliers = new Supplier();
            if (!empty($suppliers)) {

                $suppliers->truncate();
            }

            Excel::queueImport(new SupplierImport, $request->supplier_import);

            Alert::toast('File berhasil diimport', 'success');
            return back();

        }
    }

    public function export()
    {
        return Excel::download(new SupplierExport, 'supplier.xlsx');
    }
}
