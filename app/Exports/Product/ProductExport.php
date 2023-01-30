<?php

namespace App\Exports\Product;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ProductExport implements FromQuery, WithHeadings,WithStyles
{
    use Exportable;

    public function query()
    {

        $products = Product::query()->select(
            'code', 'products.name','product_categories.name as category','product_sub_categories.name as sub_category',
            'spesification', 'description', 'stock', 'selling_price', 'reseller_price'
        )->join('product_categories', 'product_categories.id', '=', 'products.product_category_id')
            ->join('product_sub_categories', 'product_sub_categories.id', '=', 'products.product_sub_category_id');

        return $products;

    }

    public function headings(): array
    {
        return [
            'Kode Produk','Nama Produk', 'Ketegori Produk', 'Sub Kategori Produk', 'Spesifikasi Produk',
            'Deskripsi Produk', 'Stok',
            'Harga Jual', 'Harga Reseller'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => [
                'font' => [
                    'bold' => true,
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => [
                        'rgb' => 'dff0d8',
                     ]
                ],

            ],
        ];
    }
}

