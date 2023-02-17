<?php

namespace App\Imports\Warehouse\Opname;

use App\Models\Opname;
use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class OpnameImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $product = Product::where('name', 'like', '%'.$row['nama_produk'].'%')->first();
        return new Opname([
            'code' => $row['kode_opname'],
            'product_id' => $product->id,
            'date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal'])->format('Y-m-d'),
            'officer' => $row['petugas'],
            'stock_opname' => $row['stok_opname'],
            'desc' => $row['keterangan']

        ]);
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
