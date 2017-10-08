<?php

namespace Ridrog\LightBoilerplate;

use Illuminate\Support\ServiceProvider;

class LightBoilerplateServiceProvider extends ServiceProvider
{
    /**
     * Name of the Package
     *
     * @var string
     */
    public $packageName = 'light-boilerplate';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        /*
         * This method only merges the first level of the configuration array.
         * If your users partially define a multi-dimensional configuration array, the missing options will not be merged.
         */
        $this->mergeConfigFrom(
            __DIR__.'/../config/light-boilerplate.php', $this->packageName
        );
    }

    /**
     * Merge and publish Config
     */
    public function publishConfig()
    {
        $this->publishes([
            __DIR__.'/../config/light-boilerplate.php' => config_path($this->packageName.'.php')
        ], $this->packageName.'-config');
    }
}
