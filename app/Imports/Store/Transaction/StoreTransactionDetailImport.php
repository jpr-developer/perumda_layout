<?php

namespace App\Imports\Store\Transaction;

use App\Models\StoreTransaction;
use App\Models\StoreTransactionDetail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StoreTransactionDetailImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $storeTransaction = StoreTransaction::where('code', $row['kode_transaksi'])->first();

        return new StoreTransactionDetail([
            'store_transaction_id' => $storeTransaction->id,
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
