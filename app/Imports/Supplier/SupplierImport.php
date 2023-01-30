<?php

namespace App\Imports\Supplier;

use App\Models\Supplier;
use App\Models\SupplierCategory;
use App\Models\SupplierSubCategory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SupplierImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{

    public function model(array $row)
    {

        // Code auto
        $char = "SPL";
        $maxCode = Supplier::where('code', 'like', 'SPL%')->select('code')->max('code');
        $no = substr($maxCode, -3, 3);
        $no = (int)$no;
        $no++;

        // get supplier category and sub category
        $category = SupplierCategory::select('id')->where('name', 'like', '%'.$row['kategori'].'%')->first();
        $subCategory = SupplierSubCategory::select('id')->where('name', 'like', '%'.$row['sub_kategori'].'%')->first();

        // if data same
        $supplier = Supplier::where('name', 'like', '%'.$row['nama_supplier'].'%')
                                ->orWhere('email', $row['email'])
                                ->first();
        if ($supplier) {
            return null;
        }

        return new Supplier([
            'code' => $char.sprintf("%03s", $no),
            'name' => $row['nama_supplier'],
            'supplier_category_id' => $category->id,
            'supplier_sub_category_id' => $subCategory->id,
            'address' => $row['alamat'],
            'phone' => $row['telepon'],
            'email' => $row['email'],
            'website' => $row['website'],
            'join_date' =>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_bergabung'])->format('Y-m-d'),
            'contract_duration' => $row['durasi_kontrak'],
            'account_number' => $row['nomor_rekening'],
        ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
