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
            'web_title' => 'Clinic Software',
            'page_title' => 'Clinic Software',
            'web_name' => 'Clinic Software',
            'web_full_name' => 'Clinic Software Dot Com',
            'web_phone' => '70827-74640',
            'web_email' => 'Officialswasthmuskan@gmail.com',
            'web_address' => 'Shah Satnam Singh Ji Chowk Sirsa 125055',
            'small_logo' => 'software/assets/images/logo-white.png',
            'dashboard_logo' => 'software/assets/images/logo.jpg',
            'signature' => 'software/assets/images/signature.png',
        ];

        view()->share($sharedData);
    }

}
