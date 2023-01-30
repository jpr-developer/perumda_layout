<?php

namespace App\Imports\Product;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\WithValidation;

class ProductImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    public function model(array $row)
    {

        $urutan = Product::count();
        $urutan++;

        // Get id category and sub category
        $category = ProductCategory::select('id')->where('name', 'like', '%'.$row['kategori'].'%')->first();
        $subCategory = ProductSubCategory::select('id')->where('name', 'like', '%'.$row['sub_kategori'])->first();

        // Check if there is same name product
        $product = Product::where('slug', Str::slug($row['nama_produk']))->first();
        if ($product) {
            return null;
        }

        return new Product([
            'code' => 'BRG'.sprintf("%03s", $urutan),
            'name' => $row['nama_produk'],
            'slug' => Str::slug($row['nama_produk']),
            'product_category_id' => $category->id,
            'product_sub_category_id' => $subCategory->id,
            'spesification' => $row['spesifikasi_produk'],
            'description' => $row['deskripsi_produk'],
            'stock' => $row['stok'],
            'min_stock' => $row['minimal_stok'],
            'selling_price' => $row['harga_jual'],
            'reseller_price' => $row['harga_reseller'],
        ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }

}
