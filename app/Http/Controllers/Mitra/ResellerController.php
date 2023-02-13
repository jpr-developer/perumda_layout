<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Imports\Reseller\ResellerCategoryImport;
use App\Imports\Reseller\ResellerImport;
use App\Imports\Reseller\ResellerSubCategoryImport;
use App\Models\Reseller;
use App\Models\ResellerCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class ResellerController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->filter;
        $resellers = Reseller::select('code', 'name', 'reseller_category_id', 'status')
                                ->where('reseller_category_id', 'like', '%'.$filter.'%')
                                ->paginate(10);
        $resellerCategories = ResellerCategory::select('id', 'name')->get();
        return view('mitra.reseller.index', compact('resellers','filter', 'resellerCategories'));
    }

    public function detail($code)
    {
        $reseller = Reseller::where('code', $code)->first();
        return view('mitra.reseller.detail', compact('reseller'));
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {

            $search = $request->search;

            $resellers = Reseller::where('name', 'like', '%'.$search.'%')
                                    ->select('code', 'name', 'reseller_category_id', 'status')
                                    ->paginate(10);

            $remappResellers = [];
            foreach ($resellers as $value) {
                $data = [
                    'code' => $value->code,
                    'name' => $value->name,
                    'reseller_category' => $value->resellerCategory->name,
                    'status' => $value->status
                ];

                array_push($remappResellers, $data);
            }

            $response = [
                'resellers' => $remappResellers
            ];

            return response($response);

        }
    }

    public function transaction_detail()
    {
        return view('mitra.reseller.detail-transaksi');
    }

    public function import(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'reseller_import' => 'required|mimes:xlsx,txt',
            ]);

            if ($validator->fails()) {

                Alert::toast('Format file harus .xlsx', 'error');
                return back();
            }

            Excel::queueImport(new ResellerCategoryImport, $request->reseller_import);
            Excel::queueImport(new ResellerSubCategoryImport, $request->reseller_import);

            Excel::queueImport(new ResellerImport, $request->reseller_import);

            Alert::toast('File berhasil diimport', 'success');
            return back();

        }
    }

}
