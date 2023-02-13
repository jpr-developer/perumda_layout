<?php

namespace App\Imports\Reseller;

use App\Models\Reseller;
use App\Models\ResellerCategory;
use App\Models\ResellerSubCategory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ResellerImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{

    public function model(array $row)
    {

        // Code auto
        $char = "RSL";
        $maxCode = Reseller::where('code', 'like', 'RSL%')->select('code')->max('code');
        $no = substr($maxCode, -3, 3);
        $no = (int)$no;
        $no++;

        // get supplier category and sub category
        $category = ResellerCategory::select('id')->where('name', 'like', '%'.$row['kategori'].'%')->first();
        $subCategory = ResellerSubCategory::select('id')->where('name', 'like', '%'.$row['sub_kategori'].'%')->first();

        // if data same
        $reseller = Reseller::where('name', 'like', '%'.$row['nama_reseller'].'%')
                                ->orWhere('email', $row['email'])
                                ->first();
        if ($reseller) {
            return null;
        }

        return new Reseller([
            'code' => $char.sprintf("%03s", $no),
            'name' => $row['nama_reseller'],
            'reseller_category_id' => $category->id,
            'reseller_sub_category_id' => $subCategory->id,
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
