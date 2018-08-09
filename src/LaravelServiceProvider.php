<?php
/**
 * Created by PhpStorm.
 * User: yedin
 * Date: 9.8.2018
 * Time: 21:19.
 */

namespace yedincisenol\Vision;

use Google\Cloud\Vision\VisionClient;
use Illuminate\Support\ServiceProvider;

class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config.php' => config_path('vision.php'),
        ], 'vision');
        $this->mergeConfigFrom(
            __DIR__.'/config.php', 'vision'
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Vision::class, function ($app) {
            return new VisionClient([
                'keyFilePath'   => $app['config']['vision']['credentials_path'],
            ]);
        });

        $this->app->alias(Vision::class, 'vision');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'Vision',
        ];
    }
}
