<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use Konekt\AppShell\Http\Controllers\UserController as KonektUserController;
use App\Http\Controllers\Admin\UserController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $this->app->concord->registerModel(\Konekt\User\Contracts\User::class, \App\User::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(KonektUserController::class, UserController::class);
    }
}
