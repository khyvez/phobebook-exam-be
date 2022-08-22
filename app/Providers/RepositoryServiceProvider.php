<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Company
        $this->app->bind(
            'App\Repositories\Interfaces\CompanyRepositoryInterface',
            'App\Repositories\CompanyRepository',
        );

        // Department
        $this->app->bind(
            'App\Repositories\Interfaces\DepartmentRepositoryInterface',
            'App\Repositories\DepartmentRepository',
        );

        // Employee
        $this->app->bind(
            'App\Repositories\Interfaces\EmployeeRepositoryInterface',
            'App\Repositories\EmployeeRepository',
        );

        // SMS log
         $this->app->bind(
            'App\Repositories\Interfaces\SmsLogRepositoryInterface',
            'App\Repositories\SmsLogRepository',
        );
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
