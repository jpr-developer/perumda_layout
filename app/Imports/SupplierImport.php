<?php

namespace App\Imports;

use App\Models\Supplier;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class SupplierImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if ($row['kategori_supplier'] == 'Pemerintah') {
            $supplier_category_id = 1;
        } else {
            $supplier_category_id = 2;
        }

        if ($row['sub_kategori_supplier'] == 'PT') {
            $supplier_sub_category_id = 1;
        } else {
            $supplier_sub_category_id = 2;
        }

        return new Supplier([
            'code' => $row['kode_supplier'],
            'name' => $row['nama_supplier'],
            'supplier_category_id' => $supplier_category_id,
            'supplier_sub_category_id' => $supplier_sub_category_id,
            'address' => $row['alamat'],
            'phone' => $row['telepon'],
            'email' => $row['email'],
            'website' => $row['website'],
            'join_date' =>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_bergabung'])->format('Y-m-d'),
            'contract_duration' => $row['durasi_kontrak'],
            'account_number' => $row['nomor_rekening'],
        ]);
    }


    public function rules(): array
    {
        return [
            'kode_supplier' => 'required',
            'nama_supplier' => 'required',
            'kategori_supplier' => 'required',
            'sub_kategori_supplier' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'unique:suppliers,email,',
            'website' => 'required',
            'durasi_kontrak' => 'required|integer',
            'nomor_rekening' => 'required',
        ];
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
