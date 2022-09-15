<?php

namespace App\Services;

use App\Contracts\ClinicClientServiceContract;
use Illuminate\Support\Facades\Http;

class ClinicClientService implements ClinicClientServiceContract
{
    public function __construct(
        private string $baseUrl
    ) {
    }

    public function store(array $data)
    {
        return Http::acceptJson()
            ->post($this->baseUrl, $data)
            ->json();
    }
}
