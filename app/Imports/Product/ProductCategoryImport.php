<?php

namespace App\Imports\Product;

use App\Models\ProductCategory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductCategoryImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $check = ProductCategory::where('slug', Str::slug($row['kategori']))->first();
        if ($check) {
            return null;
        }

        return new ProductCategory([
            'name' => $row['kategori'],
            'slug' => Str::slug($row['kategori'])
        ]);

    }

    public function chunkSize(): int
    {
        return 100;
    }
}
