<?php

namespace App\Imports;

use App\Services\AddressMigrateService;
use Illuminate\Support\Collection;
use Laravel\Prompts\Output\ConsoleOutput;
use Maatwebsite\Excel\Concerns\ToCollection;

class PSGCImport implements ToCollection
{
    private $region;
    private $province;
    private $municipality;


    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $i => $context) {

            if ($i !== 0) {

                $addressMigrateService = new AddressMigrateService($context);

                switch ($context[3]) {
                    case 'Reg':
                        $this->region = $addressMigrateService->seedRegion();
                        break;

                    case 'Dist':
                        $this->region = $addressMigrateService->seedRegion();
                        break;

                    case 'Dist':
                        $this->region = $addressMigrateService->seedRegion();
                        break;

                    case 'Prov':
                        $this->province = $addressMigrateService->seedProvince($this->region);
                        break;

                    case 'Mun':
                        $this->municipality = $addressMigrateService->seedMunicipality($this->province);
                        break;

                    case 'City':
                        $this->municipality = $addressMigrateService->seedMunicipality($this->province);
                        break;

                    case 'SubMun':
                        $this->municipality = $addressMigrateService->seedMunicipality($this->province);
                        break;

                    case 'Bgy':
                        $addressMigrateService->seedBarangay($this->municipality);
                }
            }
        }
    }
}
