<?php

namespace App\Imports\Supplier\Transaction;

use App\Models\SupplierTransaction;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SupplierTransactionImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    protected $supplier_id;

    public function __construct($supplier_id)
    {
        $this->supplier_id = $supplier_id;
    }

    public function model(array $row)
    {
        $check = SupplierTransaction::where('code', $row['kode_transaksi'])->first();

        if ($check) {
            $check->update(['nominal' => $check->nominal + ($row['harga_satuan']*$row['quantity'])]);
            return null;
        }

        return new SupplierTransaction([
            'code' => $row['kode_transaksi'],
            'supplier_id' => $this->supplier_id,
            'date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_transaksi'])->format('Y-m-d'),
            'nominal' => array_sum([$row['harga_satuan']*$row['quantity']]),
        ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
