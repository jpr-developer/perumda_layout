<?php

namespace App\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use App\Jobs\DataTestJob;
use App\Models\Reseller;
use App\Models\Supplier;
use App\Models\TestData;
use Faker\Factory;
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
