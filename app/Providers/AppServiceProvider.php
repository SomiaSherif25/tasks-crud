<?php

namespace App\Providers;

use App\Services\ApiResponseFormat;
use App\Services\AuthService;
use App\Services\TaskService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('AuthService',function(){
            return new AuthService();
        });
        $this->app->bind('TaskService',function(){
            return new TaskService();
        });
        $this->app->bind('ApiResponseFormat',function(){
            return new ApiResponseFormat();
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
