<?php

namespace App\Imports\Store;

use App\Models\Store;
use App\Models\StoreCategory;
use App\Models\StoreSubCategory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;

class StoreImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    public function model(array $row)
    {

        // Code auto
        $char = "TK";
        $maxCode = Store::where('code', 'like', 'TK%')->select('code')->max('code');
        $no = substr($maxCode, -3, 3);
        $no = (int)$no;
        $no++;

        // get supplier category and sub category
        $category = StoreCategory::select('id')->where('name', 'like', '%'.$row['kategori'].'%')->first();
        $subCategory = StoreSubCategory::select('id')->where('name', 'like', '%'.$row['sub_kategori'].'%')->first();

        // if data same
        $store = Store::where('name', 'like', '%'.$row['nama_toko'].'%')
                                ->orWhere('email', $row['email'])
                                ->first();
        if ($store) {
            return null;
        }

        return new Store([
            'code' => $char.sprintf("%03s", $no),
            'name' => $row['nama_toko'],
            'slug' => Str::slug($row['nama_toko']),
            'store_category_id' => $category->id,
            'store_sub_category_id' => $subCategory->id,
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
