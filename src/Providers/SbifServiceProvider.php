<?php
namespace Kattatzu\Sbif\Providers;

use Kattatzu\Sbif\Sbif;
use Illuminate\Support\ServiceProvider;

class SbifServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Sbif::class, function ($app) {
            $apiKey = config('services.sbif.key', env('SBIF_API_KEY'));

            return new Sbif($apiKey);
        });
    }

    public function provides()
    {
        return [Sbif::class];
    }
}
