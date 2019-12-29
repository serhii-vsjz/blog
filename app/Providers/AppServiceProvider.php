<?php

namespace App\Providers;

use App\Services\CommentService;
use App\Services\CommentServiceInterface;
use App\Services\PostService;
use App\Services\PostServiceInterface;
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
        $this->app->bind(
            PostServiceInterface::class,
            PostService::class);
        $this->app->bind(
            CommentServiceInterface::class,
            CommentService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
