<?php

namespace App\Providers;

use App\Setting;
use Illuminate\Support\ServiceProvider;


class ViewComposerServiceProvider extends ServiceProvider
{

/**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer(['*'], function ($view) {

        $settings = Setting::all();
        $settingKeys = $settings->map(function ($setting){
            return $setting->name;
        });
        $settings = $settings->map(function ($setting){
            return $setting->value;
        });
        $settings = $settingKeys->combine($settings)->toArray();
        $view->with('settings', $settings);

    });
    }


}

