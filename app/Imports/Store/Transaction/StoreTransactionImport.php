<?php

namespace App\Imports\Store\Transaction;

use App\Models\Reseller;
use App\Models\StoreTransaction;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StoreTransactionImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    protected $store_id;

    public function __construct($store_id)
    {
        $this->store_id = $store_id;
    }

    public function model(array $row)
    {
        $check = StoreTransaction::where('code', $row['kode_transaksi'])->first();
        $reseller = Reseller::select('id')->where('name', 'like', '%'.$row['reseller'].'%')->first();

        if ($check) {
            $check->update(['nominal' => $check->nominal + ($row['harga_satuan']*$row['quantity'])]);
            return null;
        }

        return new StoreTransaction([
            'code' => $row['kode_transaksi'],
            'store_id' => $this->store_id,
            'reseller_id' => $reseller->id,
            'date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_transaksi'])->format('Y-m-d'),
            'nominal' => array_sum([$row['harga_satuan']*$row['quantity']]),
        ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
