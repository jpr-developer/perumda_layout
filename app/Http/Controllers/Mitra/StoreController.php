<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Imports\Store\StoreCategoryImport;
use App\Imports\Store\StoreImport;
use App\Imports\Store\StoreSubCategoryImport;
use App\Imports\Store\Transaction\StoreTransactionDetailImport;
use App\Imports\Store\Transaction\StoreTransactionImport;
use App\Models\Store;
use App\Models\StoreCategory;
use App\Models\StoreTransaction;
use App\Models\StoreTransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class StoreController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->filter;
        $stores = Store::select('code', 'name', 'store_category_id', 'status')
                                ->where('store_category_id', 'like', '%'.$filter.'%')
                                ->paginate(10);
        $storeCategories = StoreCategory::select('id', 'name')->get();
        return view('mitra.toko.index', compact('stores','filter', 'storeCategories'));
    }

    public function detail($code)
    {
        $store = Store::where('code', $code)->first();

        return view('mitra.toko.detail', compact('store'));
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {

            $search = $request->search;

            $stores = Store::where('name', 'like', '%'.$search.'%')
                                    ->select('code', 'name', 'store_category_id', 'status')
                                    ->paginate(10);

            $remappStores = [];
            foreach ($stores as $value) {
                $data = [
                    'code' => $value->code,
                    'name' => $value->name,
                    'store_category' => $value->storeCategory->name,
                    'status' => $value->status
                ];

                array_push($remappStores, $data);
            }

            $response = [
                'stores' => $remappStores
            ];

            return response($response);

        }
    }

    public function import(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'import' => 'required|mimes:xlsx,txt',
            ]);

            if ($validator->fails()) {

                Alert::toast('Format file harus .xlsx', 'error');
                return back();
            }


            Excel::queueImport(new StoreCategoryImport, $request->import);
            Excel::queueImport(new StoreSubCategoryImport, $request->import);

            Excel::queueImport(new StoreImport, $request->import);

            Alert::toast('File berhasil diimport', 'success');
            return back();

        }
    }



    // Transaction

    public function chart($code)
    {
        // $store= Store::where('code', $code)->first();
        // $storeTransactions = new StoreTransaction();

        // // Get Years
        // $years = $storeTransactions->getYears($store->id);

        // // Get Months
        // $months = $storeTransactions->getMonths($store->id, Carbon::now()->format('Y'));

        // // Get Total Transactions
        // $totalTransactions = $storeTransactions->getTotalTransactions($store->id, Carbon::now()->format('Y'));


        // $response = [
        //     'total' => $totalTransactions,
        //     'months' => $months,
        //     'years' => $years
        // ];

        // return response($response);


    }

    public function chart_filter(Request $request, $code)
    {
        // Get supplier
        // $store = Store::where('code', $code)->first();
        // $year = $request->year;

        // $transaction = new StoreTransaction();

        // $getMonths = $transaction->getMonths($store->id, $year);

        // $getTotal = $transaction->getTotalTransactions($store->id, $year);

        // $response = [
        //     'total' => $getTotal,
        //     'months' => $getMonths,
        //     'year' => $year
        // ];

        // return response($response);
    }

    public function transaction_detail($code_store, $code_tr)
    {
        // $transaction = StoreTransaction::where('code', $code_tr)->first();


        // $transaction_details = StoreTransactionDetail::where('store_transaction_id', $transaction->id)->get();


        // return view('mitra.toko.detail-transaksi', compact('transaction', 'transaction_details', 'code_store'));
    }

}
