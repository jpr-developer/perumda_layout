<?php

namespace App\Imports\Product;

use App\Models\ProductSubCategory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductSubCategoryImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $check = ProductSubCategory::where('slug', Str::slug($row['sub_kategori']))->first();
        if ($check) {
            return null;
        }

        return new ProductSubCategory([
            'name' => $row['sub_kategori'],
            'slug' => Str::slug($row['sub_kategori'])
        ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
