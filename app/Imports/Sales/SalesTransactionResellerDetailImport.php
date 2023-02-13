<?php

namespace App\Imports\Sales;

use App\Models\SalesTransactionReseller;
use App\Models\SalesTransactionResellerDetail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SalesTransactionResellerDetailImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $salesTransactionReseller = SalesTransactionReseller::where('code', $row['kode_transaksi'])->first();

        return new SalesTransactionResellerDetail([
            'sales_transaction_reseller_id' => $salesTransactionReseller->id,
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
