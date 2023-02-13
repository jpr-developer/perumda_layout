<?php

namespace App\Imports\Sales;

use App\Models\SalesTransactionReseller;
use App\Models\Store;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SalesTransactionResellerImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    protected $reseller_id;

    public function __construct($reseller_id)
    {
        $this->reseller_id = $reseller_id;
    }

    public function model(array $row)
    {
        $check = SalesTransactionReseller::where('code', $row['kode_transaksi'])->first();
        $store = Store::select('id')->where('name', 'like', '%'.$row['toko'].'%')->first();

        if ($check) {
            $check->update(['nominal' => $check->nominal + ($row['harga_satuan']*$row['quantity'])]);
            return null;
        }

        return new SalesTransactionReseller([
            'code' => $row['kode_transaksi'],
            'reseller_id' => $this->reseller_id,
            'store_id' => $store->id,
            'date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_transaksi'])->format('Y-m-d'),
            'nominal' => array_sum([$row['harga_satuan']*$row['quantity']]),
        ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
