<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use App\Imports\Sales\SalesTransactionResellerDetailImport;
use App\Imports\Sales\SalesTransactionResellerImport;
use App\Models\SalesTransactionReseller;
use App\Models\SalesTransactionResellerDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class SalesResellerTransactionController extends Controller
{
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


             // Check data
            $transactions = SalesTransactionReseller::where('reseller_id', $request->reseller_id)->get();
            if (!empty($transactions)) {

                foreach ($transactions as $value) {
                    $value->delete();

                    SalesTransactionResellerDetail::where('sales_transaction_reseller_id', $value->id)->delete();
                }

            }

            Excel::queueImport(new SalesTransactionResellerImport($request->reseller_id), $request->import);
            Excel::queueImport(new SalesTransactionResellerDetailImport, $request->import);

            Alert::toast('File berhasil diimport', 'success');
            return back();


        }
    }
}
