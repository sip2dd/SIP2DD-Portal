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
use App\Repositories\FAQ\FaqInterface;
use App\Repositories\FAQ\FaqRepository;
use App\Repositories\Regulation\RegulationInterface;
use App\Repositories\Regulation\RegulationRepository;
use App\Repositories\Event\EventInterface;
use App\Repositories\Event\EventRepository;
use App\Repositories\Glossary\GlossaryInterface;
use App\Repositories\Glossary\GlossaryRepository;

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
        $this->app->bind(FaqInterface::class, FaqRepository::class);
        $this->app->bind(RegulationInterface::class, RegulationRepository::class);
        $this->app->bind(EventInterface::class, EventRepository::class);
        $this->app->bind(GlossaryInterface::class, GlossaryRepository::class);

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
