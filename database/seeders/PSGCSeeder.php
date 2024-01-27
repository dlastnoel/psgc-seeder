<?php

namespace Database\Seeders;

use App\Imports\PSGCImport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class PSGCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new PSGCImport(), storage_path('app/psgc/PSGC-3Q-2023-Publication-Datafile.csv'), null, \Maatwebsite\Excel\Excel::CSV);
    }
}
