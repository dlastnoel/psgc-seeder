<?php

namespace Database\Seeders;

use App\Imports\ZipCodeImport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class ZipCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new ZipCodeImport(), storage_path('app/psgc/PSGC-Zipcodes.xlsx'), null, \Maatwebsite\Excel\Excel::XLSX);
    }
}
