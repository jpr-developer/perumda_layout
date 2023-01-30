<?php

namespace App\Exports;

use App\Models\Supplier;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class SupplierExport implements  FromQuery, WithHeadings, WithStyles
{
    use Exportable;

    public function query()
    {
        $suppliers =  Supplier::query()->select(
            'code', 'suppliers.name', 'supplier_categories.name as category', 'supplier_sub_categories.name as sub_category',
            'address', 'phone', 'email', 'website', 'join_date', 'contract_duration',
            'account_number'
        )->join('supplier_categories', 'supplier_categories.id', '=', 'suppliers.supplier_category_id')
            ->join('supplier_sub_categories', 'supplier_sub_categories.id', '=', 'suppliers.supplier_sub_category_id');

        return $suppliers;
    }

    public function headings(): array
    {
        return [
            'Kode Supplier',
            'Nama Supplier',
            'Kategori',
            'Sub Kategori',
            'Alamat',
            'Telepon',
            'Email',
            'Website',
            'Tanggal Bergabung',
            'Durasi Kontrak',
            'Nomor Rekening',
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
