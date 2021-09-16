<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }
    public function loadSettings()
    {
        if (Schema::hasTable('settings')) {

            $settings = Cache::rememberForever('settingsTable', function () {
                return Setting::all(['name', 'value'])->keyBy('name')->transform(function ($setting) {
                    return $setting->value; // return only the value
                })->toArray();
            });

            config(['settings' => $settings]);
        }
    }


    public function boot()
    {
       $this->loadSettings();
        Schema::defaultStringLength(191);


    }
}
