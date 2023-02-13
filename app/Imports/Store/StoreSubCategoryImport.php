<?php

namespace App\Imports\Store;

use App\Models\StoreSubCategory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StoreSubCategoryImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    public function model(array $row)
    {
        // Check if there same data
        $check = StoreSubCategory::where('slug', Str::slug($row['sub_kategori']))->first();
        if ($check) {
            return null;
        }


        return new StoreSubCategory([
            'name' => $row['sub_kategori'],
            'slug' => Str::slug($row['sub_kategori'])
        ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
