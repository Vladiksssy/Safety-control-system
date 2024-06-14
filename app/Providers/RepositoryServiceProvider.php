<?php

namespace App\Providers;

use App\Services\CorrectiveActionService;
use App\Services\EmployeeService;
use App\Services\IncidentService;
use App\Services\InspectionService;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\InspectionRepositoryInterface;
use App\Repositories\Interfaces\IncidentRepositoryInterface;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;
use App\Repositories\Interfaces\CorrectiveActionRepositoryInterface;

use App\Repositories\InspectionRepository;
use App\Repositories\IncidentRepository;
use App\Repositories\EmployeeRepository;
use App\Repositories\CorrectiveActionRepository;



class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(IncidentRepositoryInterface::class, IncidentRepository::class);
        $this->app->bind(IncidentService::class, function ($app) {
            return new IncidentService($app->make(IncidentRepositoryInterface::class));
        });

        $this->app->bind(InspectionRepositoryInterface::class, InspectionRepository::class);
        $this->app->bind(InspectionService::class, function ($app) {
            return new InspectionService($app->make(InspectionRepositoryInterface::class));
        });

        $this->app->bind(EmployeeRepositoryInterface::class, EmployeeRepository::class);
        $this->app->bind(EmployeeService::class, function ($app) {
            return new EmployeeService($app->make(EmployeeRepositoryInterface::class));
        });
        $this->app->bind(CorrectiveActionRepositoryInterface::class, CorrectiveActionRepository::class);
        $this->app->bind(CorrectiveActionService::class, function ($app) {
            return new CorrectiveActionService($app->make(CorrectiveActionRepositoryInterface::class));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        //
    }
}
