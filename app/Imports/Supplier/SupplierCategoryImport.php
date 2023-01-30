<?php

namespace App\Imports\Supplier;

use App\Models\SupplierCategory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SupplierCategoryImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{

    public function model(array $row)
    {

        // If there same data kategori
        $check  = SupplierCategory::where('slug', Str::slug($row['kategori']))->first();
        if ($check) {
            return null;
        }

        return new SupplierCategory([
            'name' => $row['kategori'],
            'slug' => Str::slug($row['kategori'])
        ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
