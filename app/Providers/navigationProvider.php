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
                    'url' => route('frontend.index', ['q' => '#']),
                    'show_on_footer' => true
                ],
                (object) [
                    'title' => 'About',
                    'url' => route('frontend.index', ['q' => 'about']),
                    'show_on_footer' => true
                ],
                (object) [
                    'title' => 'Gallery',
                    'url' => route('frontend.index', ['q' => 'gallery']),
                    'show_on_footer' => true
                ],
                (object) [
                    'title' => 'Carrier',
                    'url' => route('frontend.index', ['q' => 'carrier']),
                    'show_on_footer' => true
                ],
                (object) [
                    'title' => 'Contact',
                    'url' => route('frontend.index', ['q' => 'contact']),
                    'show_on_footer' => false
                ],
            ]);
        });
    }
}
