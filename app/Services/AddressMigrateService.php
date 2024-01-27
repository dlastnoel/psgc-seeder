<?php

namespace App\Services;

use App\Models\Barangay;
use App\Models\Municipality;
use App\Models\Province;
use App\Models\Region;

class AddressMigrateService
{
    private $request;
    private $context;

    public function __construct($request)
    {
        $this->request = $request;
        $this->context = [
            'code' => $request[0],
            'name' => $request[1],
        ];

        if ($request[4]) {
            $this->context['old_name'] = $request[4];
        }
    }

    public static function prepare($request)
    {
        return new self($request);
    }

    public function seedRegion()
    {
        return Region::create($this->context);
    }

    public function seedProvince($regionModel)
    {
        $this->context['region_code'] = $regionModel->code;

        return Province::create($this->context);
    }

    public function seedMunicipality($provinceModel)
    {
        $this->context['province_code'] = $provinceModel->code;

        return Municipality::create($this->context);
    }

    public function seedBarangay($municipalityModel)
    {
        $this->context['municipality_code'] = $municipalityModel->code;

        return Barangay::create($this->context);
    }
}
