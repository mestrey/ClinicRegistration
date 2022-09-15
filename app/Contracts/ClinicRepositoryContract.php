<?php

namespace App\Contracts;

use App\Models\Clinic;

interface ClinicRepositoryContract
{
    public function store(array $data): Clinic;
}
