<?php

namespace App\Providers;

use App\Shop;
use App\Category;
use App\Observers\ShopObserver;
use TCG\Voyager\Facades\Voyager;
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
        Voyager::useModel('Category', \App\Category::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Shop::observe(ShopObserver::class);

        $categories = cache()->remember('categories','3600', function(){
            return Category::whereNull('parent_id')->get();
        });

        view()->share('categories', $categories);

    }
}
