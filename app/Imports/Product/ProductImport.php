<?php

namespace App\Imports\Product;

use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;

class ProductImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    protected $product_category_id;
    protected $product_sub_category_id;

    public function __construct($product_category_id, $product_sub_category_id)
    {
        $this->product_category_id = $product_category_id;
        $this->product_sub_category_id = $product_sub_category_id;
    }

    public function model(array $row)
    {

        $urutan = Product::count();
        $urutan++;

        return new Product([
            'code' => 'BRG'.sprintf("%03s", $urutan),
            'name' => $row['nama_produk'],
            'slug' => Str::slug($row['nama_produk']),
            'product_category_id' => $this->product_category_id,
            'product_sub_category_id' => $this->product_sub_category_id,
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
