<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use GrahamCampbell\Markdown\Facades\Markdown;

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
    * 
    */
    public function boot(): void
    {
        if (Schema::hasTable('categories')) {
            $categories=Category::all();
            View::share('categories',$categories);
        }
        if (Schema::hasTable('tags')) {
            $tags=Tag::all();
            View::share('tags',$tags);
        }
        
        
        
        
    }
}
