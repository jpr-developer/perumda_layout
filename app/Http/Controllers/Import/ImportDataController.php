<?php

namespace App\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use App\Models\Reseller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ImportDataController extends Controller
{
    public function index()
    {

        $resellers = Reseller::select('id', 'name')->get();

        $suppliers = Supplier::select('id', 'name')->get();
        return view('import.index', compact('suppliers', 'resellers'));
    }
}
