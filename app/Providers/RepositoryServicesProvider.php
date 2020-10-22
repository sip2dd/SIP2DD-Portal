<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Home\HomeInterface;
use App\Repositories\Home\HomeRepository;
use App\Repositories\News\NewsInterface;
use App\Repositories\News\NewsRepository;

class RepositoryServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(HomeInterface::class, HomeRepository::class);
        $this->app->bind(NewsInterface::class, NewsRepository::class);
        
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
