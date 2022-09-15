<?php

namespace App\Contracts;

interface ClinicClientServiceContract
{
    public function __construct(string $baseUrl);
    public function store(array $data);
}
