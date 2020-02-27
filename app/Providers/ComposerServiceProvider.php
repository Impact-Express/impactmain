<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Views\Composers\NavigationComposer;
use App\Views\Composers\RecentPostsComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('customer.news.partials.sidebar', NavigationComposer::class);
        view()->composer('admin.dashboard.index', RecentPostsComposer::class);

    }
}
