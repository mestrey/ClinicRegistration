<?php

namespace App\Repositories;

use App\Contracts\ClinicClientRepositoryContract;
use App\Contracts\ClinicClientServiceContract;
use App\Services\ClinicClientService;

class ClinicClientRepository implements ClinicClientRepositoryContract
{
    private ClinicClientServiceContract $clinicClientService;

    public function __construct()
    {
        $this->clinicClientService = new ClinicClientService(env('CLINIC_API_URL'));
    }

    public function store(array $data): bool
    {
        $res = $this->clinicClientService->store($data);
        return isset($res['success']) ? $res['success'] : false;
    }
}
