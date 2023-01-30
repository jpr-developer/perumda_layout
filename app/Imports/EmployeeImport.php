<?php

namespace App\Imports;

use App\Models\Employee;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        // Check if there is same data
        $employee = Employee::where('nip', $row['nomor_induk_pegawai'])->first();
        if ($employee) {
            return null;
        }

        return new Employee([
            'nip' => $row['nomor_induk_pegawai'],
            'contract_number' => $row['nomor_kontrak'],
            'name' => $row['nama_pegawai'],
            'education' => $row['pendidikan'],
            'address' => $row['alamat'],
            'birth_place' => $row['tempat_lahir'],
            'birth_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_lahir'])->format('Y-m-d'),
            'phone' => $row['no_hp'],
            'email' => $row['email'],
            'join_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_bergabung'])->format('Y-m-d'),
            'position' => $row['posisi'],
            'job' => $row['jabatan'],
            'status' => $row['status_kepegawaian']
        ]);
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
