<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {

        $employess = Http::withToken(
            '7|nqWpMlgCECYIRCmAt2XnsvhdBk7kKsqmnyRIvIER', 'Bearer'
        )->get('http://perumda.test/api/v1/employees')['data'];

        dd($employess);

        // return view('employee.index');
    }

}
