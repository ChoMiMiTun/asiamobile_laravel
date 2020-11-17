<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Subcategory;
use App\Brand;
use App\Review;

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
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $reviews = Review::all();
        View::share('data', [$categories, $subcategories, $brands, $reviews]);
    }
}
