<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use App\Imports\Warehouse\Opname\OpnameImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class WarehouseImportController extends Controller
{
    public function opname_import(Request $request)
    {
        if ($request->isMethod('post')) {

            $import = $request->import;

            Excel::queueImport(new OpnameImport, $import);

            Alert::toast('File berhasil diimport', 'success');
            return back();

        }
    }
}
