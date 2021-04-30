<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Repositories\{
    Ads\AdsInterface,
    Ads\AdsRepository,
    Favorites\FavoriteInterface,
    Favorites\FavoriteRepository,
    Comments\CommentInterface,
    Comments\CommentRepository,
};
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
            AdsInterface::class,
            AdsRepository::class
        );
        $this->app->bind(
            FavoriteInterface::class,
            FavoriteRepository::class
        );
        $this->app->bind(
            CommentInterface::class,
            CommentRepository::class
        );

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
