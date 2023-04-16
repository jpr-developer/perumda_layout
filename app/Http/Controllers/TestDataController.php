<?php

namespace App\Http\Controllers;

use App\Imports\TestDataImport;
use App\Jobs\DataTestJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Maatwebsite\Excel\Facades\Excel;

class TestDataController extends Controller
{

    public function import(Request $request)
    {
        $starttime = microtime(true);

        $this->validate($request, [
            'import' => 'required|mimes:xls,xlsx'
        ]);

        //UPLOAD FILE
        $file = $request->import;
        $filename = time() .'.'. $file->getClientOriginalExtension();
        // $file->storeAs(
        //     'public', $filename
        // );
        $file->move(base_path('public/import'), $filename);

        //MEMBUAT JOBS DENGAN MENGIRIMKAN PARAMETER FILENAME
        DataTestJob::dispatch($filename);

        $endtime = microtime(true);
        $timediff = $endtime - $starttime;

        return "<h1> Halaman diproses dalam" . sprintf('%0.2f', $timediff) . "dettik </h1>";
    }
}
