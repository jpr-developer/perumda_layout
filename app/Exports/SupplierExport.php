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
        return Supplier::query()->select(
            'code', 'name', 'supplier_category_id', 'supplier_sub_category_id',
            'address', 'phone', 'email', 'website', 'join_date', 'contract_duration',
            'account_number'
        );
    }

    public function headings(): array
    {
        return [
            'Kode Supplier',
            'Nama Supplier',
            'Kategori Supplier',
            'Sub Kategori Supplier',
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
