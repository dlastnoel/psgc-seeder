<?php

namespace App\Http\Controllers;

use App\Imports\PSGCImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SeederController extends Controller
{
    public function index()
    {
        Excel::import(new PSGCImport(), storage_path('app/psgc/PSGC-3Q-2023-R1.csv'), null, \Maatwebsite\Excel\Excel::CSV);
    }
}
