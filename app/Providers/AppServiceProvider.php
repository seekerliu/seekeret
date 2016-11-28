<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SettingsRepository as Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @param $setting
     * @return void
     */
    public function boot(Setting $setting)
    {
        view()->share('settings', $setting->getList());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
