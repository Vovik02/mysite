<?php

namespace App\Providers;

use App\Models\FriendCategories;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $categories = FriendCategories::orderBy('id')->get();
        View::share([
            'categories' => $categories
        ]);
    }
}
