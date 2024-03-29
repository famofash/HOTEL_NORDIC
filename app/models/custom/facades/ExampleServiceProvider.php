<?php namespace Classes\custom\facades;
use Illuminate\Support\ServiceProvider;
class ExampleServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register 'underlyingclass' instance container to our UnderlyingClass object
        $this->app['extra'] = $this->app->share(function($app)
        {
            return new custom\extra;
        });

        // Shortcut so developers don't need to add an Alias in app/config/app.php
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Extra', 'custom\extra');
        });
    }
}