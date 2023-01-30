<?php

namespace App\Imports\Supplier;

use App\Models\SupplierSubCategory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SupplierSubCategoryImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{

    public function model(array $row)
    {
        // Check if there same data
        $check = SupplierSubCategory::where('slug', Str::slug($row['sub_kategori']))->first();
        if ($check) {
            return null;
        }


        return new SupplierSubCategory([
            'name' => $row['sub_kategori'],
            'slug' => Str::slug($row['sub_kategori'])
        ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
