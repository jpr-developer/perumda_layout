<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $filter_job = $request->filter_job;
        $employees = Employee::select('nip', 'name', 'position', 'job')
                                    ->where('job', 'like', '%'.$filter_job.'%')
                                    ->paginate(10);
        return view('employee.index', compact('employees', 'filter_job'));
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $input = $request->input;
            $data = Employee::where('name', 'like','%'.$input.'%')
                                ->select('nip', 'name', 'position', 'job')
                                ->get();

            return response()->json(
                [
                    'data' => $data
                ]
            );
        }
    }

    public function detail($nip)
    {
        $employee = Employee::where('nip', $nip)->first();
        return view('employee.detail', compact('employee'));
    }

    public function import(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'employee_import' => 'required|mimes:xlsx,txt'
            ]);

            if ($validator->fails()) {

                Alert::toast('Format file harus .xlsx', 'error');
                return back();
            }

            Excel::queueImport(new EmployeeImport, $request->employee_import);

            Alert::toast('File berhasil diimport', 'success');
            return back();

        }
    }

    public function export()
    {
        return Excel::download(new EmployeeExport, 'data_pegawai.xlsx');
    }
}
