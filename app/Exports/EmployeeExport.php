<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class EmployeeExport implements FromQuery, WithHeadings, WithStyles
{
    use Exportable;

    public function query()
    {
        return Employee::query()->select(
            'nip', 'contract_number', 'name',
            'education', 'address', 'birth_place',
            'birth_date', 'phone', 'email',
            'join_date', 'position', 'job',
            'status'
        );
    }

    public function headings(): array
    {
        return [
            'Nama Induk Pegawai',
            'Nomor Kontrak',
            'Nama Pegawai',
            'Pendidikan',
            'Alamat',
            'Tempat Lahir',
            'Tanggal Lahir',
            'No Hp',
            'Email',
            'Tanggal Bergabung',
            'Posisi',
            'Jabatan',
            'Status Kepegawaian'
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
