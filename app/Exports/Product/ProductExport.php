<?php

namespace App\Exports\Product;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ProductExport implements FromQuery, WithHeadings,WithStyles
{
    use Exportable;

    public function query()
    {
        return Product::query()->select(
            'name', 'spesification',
            'description', 'stock', 'min_stock',
            'selling_price', 'reseller_price'
        );
    }

    public function headings(): array
    {
        return [
            'Nama Produk', 'Spesifikasi Produk',
            'Deskripsi Produk', 'Stok', 'Minimal Stok',
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

