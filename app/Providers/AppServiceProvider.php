<?php

namespace App\Providers;

use App\Repository\GoodsRepository;
use App\Repository\GoodsRepositoryInterface;
use App\Services\GoodsServiceInterface;
use App\Services\GoodsService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            GoodsServiceInterface::class,
            GoodsService::class,
        );

        $this->app->bind(
            GoodsRepositoryInterface::class,
            GoodsRepository::class,
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
