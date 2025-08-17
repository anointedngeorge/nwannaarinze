<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class navigationProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('navigationProvider', (object) [
                (object) [
                    'title' => 'Home',
                    'url' => route('frontend.index', ['q' => '#'])
                ],
                (object) [
                    'title' => 'About',
                    'url' => route('frontend.index', ['q' => 'about'])
                ],
                (object) [
                    'title' => 'Gallery',
                    'url' => route('frontend.index', ['q' => 'gallery'])
                ],
                (object) [
                    'title' => 'Carrier',
                    'url' => route('frontend.index', ['q' => 'carrier'])
                ],
                (object) [
                    'title' => 'Contact',
                    'url' => route('frontend.index', ['q' => 'contact'])
                ],
            ]);
        });
    }
}
