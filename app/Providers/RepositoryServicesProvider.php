<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Home\HomeInterface;
use App\Repositories\Home\HomeRepository;
use App\Repositories\News\NewsInterface;
use App\Repositories\News\NewsRepository;
use App\Repositories\Gallery\GalleryInterface;
use App\Repositories\Gallery\GalleryRepository;
use App\Repositories\Government\GovernmentInterface;
use App\Repositories\Government\GovernmentRepository;
use App\Repositories\GovServices\GovServicesInterface;
use App\Repositories\GovServices\GovServicesRepository;

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
        $this->app->bind(GalleryInterface::class, GalleryRepository::class);
        $this->app->bind(GovernmentInterface::class, GovernmentRepository::class);
        $this->app->bind(GovServicesInterface::class, GovServicesRepository::class);

        
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
