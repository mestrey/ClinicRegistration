<?php

namespace App\Repositories;

use App\Contracts\ClinicRepositoryContract;
use App\Models\Clinic;

class ClinicRepository implements ClinicRepositoryContract
{
    public function store(array $data): Clinic
    {
        return Clinic::create($data);
    }
}
