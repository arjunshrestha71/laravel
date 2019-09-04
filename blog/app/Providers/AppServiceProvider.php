<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use DB;
use App\Models\Category;

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
        Schema::defaultStringLength(191);

        view()->composer('topmenu', function($view){
            $cats = DB::select('SELECT * FROM categories WHERE
            status=1 ORDER by updated_at DESC LIMIT 5');
            $view->with('cats', $cats);
        });

         view()->composer('heading', function($view){
            $headings = DB::select('SELECT * FROM posts WHERE
            status=1 ORDER by updated_at DESC LIMIT 1');
            $view->with('headings', $headings);
        });

    }
}
