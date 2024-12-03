<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Logo;
use Illuminate\Support\ServiceProvider;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $logo = Logo::orderBy('id','desc')->first();
            $view->with('logo',$logo);
            $categories=Category::orderBy('id','desc')->get();
            $view->with('categories',$categories);
        });
    }

    }

