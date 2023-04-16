<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use App\Models\Opname;
use App\Models\Product;
use App\Models\PurchaseTransaction;
use App\Models\PurchaseTransactionDetail;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function purchase()
    {
        $transactions = PurchaseTransaction::select('code', 'date', 'nominal')->orderBy('id', 'desc')->paginate(5);
        return view('pergudangan.pemesanan.index', compact('transactions'));
    }

    public function purchase_detail($code)
    {
        $transaction = PurchaseTransaction::where('code', $code)->first();
        $detailTransactions = PurchaseTransactionDetail::where('purchase_transaction_id', $transaction->id)->get();
        return view('pergudangan.pemesanan.detail', compact('transaction', 'detailTransactions'));
    }

    public function stock()
    {
        $products = Product::select('code', 'name', 'product_category_id', 'product_sub_category_id', 'stock')->orderBy('id', 'desc')->paginate(10);
        return view('pergudangan.stock.index', compact('products'));
    }

    public function opname()
    {
        $opnames= Opname::select('code', 'date', 'product_id')->orderBy('id', 'desc')->paginate(10);
        return view('pergudangan.opname.index', compact('opnames'));
    }

    public function opname_detail($code)
    {
        $opname = Opname::where('code', $code)->first();
        $product = Product::where('id', $opname->product_id)->first();
        return view('pergudangan.opname.detail', compact('opname', 'product'));
    }

    public function spoil()
    {
        return view('pergudangan.spoil.index');
    }

    public function arus_produk()
    {
        return view('pergudangan.arus_produk.index');
    }
}
