<?php

namespace App\Helpers;

use App\Setting as AppSetting;

class Settings {
    private $settings;
    public function __construct( ){
        $settings = AppSetting::all();
        $settingKeys = $settings->map(function ($setting){
            return $setting->name;
        });
        $settings = $settings->map(function ($setting){
            return $setting->value;
        });
        $this->settings = $settingKeys->combine($settings)->toArray();
    }
    
function setting() {
    // global $settings;
    // dd($settings);
};
}

?>