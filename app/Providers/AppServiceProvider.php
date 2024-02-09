<?php

namespace App\Providers;

use App\Models\About;
use Illuminate\Support\Facades\View;
use App\Models\Categori;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       view::share('categories',$categories=Categori::all());
       view::share('abouts',$abouts=About::all());
    }
}
