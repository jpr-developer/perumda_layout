<?php

namespace App\Imports\Purchase;

use App\Models\PurchaseTransaction;
use App\Models\PurchaseTransactionDetail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PurchaseTransactionDetailImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

       $purchaseTransaction = PurchaseTransaction::where('code', $row['kode_transaksi'])->first();

        return new PurchaseTransactionDetail([
            'purchase_transaction_id' =>$purchaseTransaction->id,
            'uraian' => $row['uraian'],
            'unit_price' => $row['harga_satuan'],
            'qty' => $row['quantity']
        ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
