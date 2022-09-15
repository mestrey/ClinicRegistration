<?php

namespace App\Providers;

use App\Contracts\ClinicClientRepositoryContract;
use App\Contracts\ClinicClientServiceContract;
use App\Contracts\ClinicRepositoryContract;
use App\Repositories\ClinicClientRepository;
use App\Repositories\ClinicRepository;
use App\Services\ClinicClientService;
use Illuminate\Support\ServiceProvider;

class ClinicServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ClinicRepositoryContract::class, ClinicRepository::class);
        $this->app->singleton(ClinicClientRepositoryContract::class, ClinicClientRepository::class);
        $this->app->singleton(ClinicClientServiceContract::class, ClinicClientService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
