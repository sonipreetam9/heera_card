<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
     */
   public function boot(): void
{
    $sharedData = [
        'web_title'      => 'Hospital Sofware',
        'page_title'      => 'Hospital Sofware',
        'web_name'        => 'Hospital Sofware',
        'web_full_name'   => 'Hospital Sofware Dot Com',
        'web_phone'       => '9999922222',
        'web_email'       => 'hospitalsoftware@gmail.com',
        'web_address'         => 'Shah Satnam Singh Ji Chowk Sirsa 125055',
        'small_logo'         => 'assets/img/logo.avif',
    ];

    view()->share($sharedData);
}

}
