<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RkapbController extends Controller
{
    public function index()
    {

        $rkapb = public_path('excel/example.csv');
        $data = file_get_contents($rkapb);

        $rows = array_map("str_getcsv", explode("\n", $data));
        $header = array_shift($rows);

        return view('rkap.index', compact('rows', 'header'));
    }
}
