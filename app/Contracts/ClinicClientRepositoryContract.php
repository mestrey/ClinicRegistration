<?php

namespace App\Contracts;

interface ClinicClientRepositoryContract
{
    public function __construct();
    public function store(array $data): bool;
}
