<?php

namespace App\Exports\Supplier;

use App\Models\SupplierTransaction;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class SupplierTransactionExport implements FromQuery, WithHeadings, WithStyles
{
    use Exportable;

    protected $supplier_id;

    public function __construct($supplier_id)
    {
        $this->supplier_id = $supplier_id;
    }

    public function query()
    {
        $transactions = SupplierTransaction::where('supplier_id', $this->supplier_id)
                                                ->select('code', 'date', 'nominal');
        return $transactions;
    }

    public function headings(): array
    {
        return [
            'Kode Transaksi',
            'Tanggal Transaksi',
            'Total Transaksi'
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
