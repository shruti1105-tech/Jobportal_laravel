<?php

namespace App\Providers;

use App\Repository\CityRepository;
use App\Repository\CompanyRepository;
use App\Repository\HomePageRepository;
use App\Repository\ICityRepository;
use App\Repository\ICompanyRepository;
use App\Repository\IHomePageRepository;
use App\Repository\IJobRepository;
use App\Repository\JobRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ICityRepository::class,CityRepository::class);
        $this->app->bind(ICompanyRepository::class,CompanyRepository::class);
        $this->app->bind(IJobRepository::class,JobRepository::class);
        $this->app->bind(IHomePageRepository::class,HomePageRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
