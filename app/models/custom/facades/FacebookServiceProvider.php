<?php namespace classes\custom\facades;
use Illuminate\Support\ServiceProvider;
class FacebookServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register 'underlyingclass' instance container to our UnderlyingClass object
        $this->app['facebook'] = $this->app->share(function($app)
        {
            return new custom\facebook;
        });

        // Shortcut so developers don't need to add an Alias in app/config/app.php
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Fbk', 'custom\facebook');
        });
    }
}