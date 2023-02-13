<?php

namespace App\Imports\Reseller;

use App\Models\ResellerSubCategory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;

class ResellerSubCategoryImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    public function model(array $row)
    {
        // Check if there same data
        $check = ResellerSubCategory::where('slug', Str::slug($row['sub_kategori']))->first();
        if ($check) {
            return null;
        }


        return new ResellerSubCategory([
            'name' => $row['sub_kategori'],
            'slug' => Str::slug($row['sub_kategori'])
        ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
