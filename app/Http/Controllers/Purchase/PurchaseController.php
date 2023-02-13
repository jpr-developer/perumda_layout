<?php

namespace App\Http\Controllers\Purchase;

use App\Http\Controllers\Controller;
use App\Imports\Purchase\PurchaseTransactionDetailImport;
use App\Imports\Purchase\PurchaseTransactionImport;
use App\Models\PurchaseTransaction;
use App\Models\PurchaseTransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class PurchaseController extends Controller
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


            $transactions = PurchaseTransaction::where('supplier_id', $request->supplier_id)->get();
            if (!empty($transactions)) {

                foreach ($transactions as $value) {
                    $value->delete();

                    PurchaseTransactionDetail::where('purchase_transaction_id', $value->id)->delete();
                }

            }

            Excel::queueImport(new PurchaseTransactionImport($request->supplier_id), $request->import);
            Excel::queueImport(new PurchaseTransactionDetailImport, $request->import);

            Alert::toast('File berhasil diimport', 'success');
            return back();
        }
    }
}
