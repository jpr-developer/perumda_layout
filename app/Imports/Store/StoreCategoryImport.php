<?php

namespace App\Imports\Store;

use App\Models\StoreCategory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;

class StoreCategoryImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    public function model(array $row)
    {

        // If there same data kategori
        $check  = StoreCategory::where('slug', Str::slug($row['kategori']))->first();
        if ($check) {
            return null;
        }

        return new StoreCategory([
            'name' => $row['kategori'],
            'slug' => Str::slug($row['kategori'])
        ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
