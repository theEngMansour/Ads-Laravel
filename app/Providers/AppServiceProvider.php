<?php

namespace App\Providers;

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
        //تخلي الاستعلام  لمرة واحدة لتقليل ضغط ع موقع
        $this->app->singleton('App\Http\ViewComposers\CategoryComposer');
        $this->app->singleton('App\Http\ViewComposers\CountryComposer');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer(
            ['partials.categoryNav','partials.searchfrm','lists.categories','ads.edit'],'App\Http\ViewComposers\CategoryComposer'
        );
        view()->composer(
            ['lists.Country','ads.edit'],'App\Http\ViewComposers\CountryComposer'
        );
        view()->composer(
            ['lists.Currencies','ads.edit'],'App\Http\ViewComposers\CurrencyComposer'
        );

    }
}
