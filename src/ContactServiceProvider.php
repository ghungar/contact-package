<?php

namespace Raman\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/Migrations');

        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php', 'contact'
        );

        # publishing config file in config foler of laravel

        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ]);
    }

    public function register()
    {
        # code...
    }
}
