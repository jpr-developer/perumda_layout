<?php

namespace App\Imports\Supplier\Transaction;

use App\Models\SupplierTransaction;
use App\Models\SupplierTransactionDetail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SupplierTransactionDetailImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $supplierTransaction = SupplierTransaction::where('code', $row['kode_transaksi'])->first();

        return new SupplierTransactionDetail([
            'supplier_transaction_id' => $supplierTransaction->id,
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
