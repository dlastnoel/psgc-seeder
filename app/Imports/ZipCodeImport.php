<?php

namespace App\Imports;

use App\Models\Municipality;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ZipCodeImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $i => $context) {

            if ($i !== 0) {
                $municipality = Municipality::where(function ($query) use ($context) {
                    $query
                        ->where('province_code', $context[0])
                        ->where('name', 'LIKE', '%' . $context[2] . '%');
                })
                    ->first();

                if ($municipality) {
                    $municipality->update([
                        'zip_code' => $context[3]
                    ]);
                }
            }
        }
    }
}
