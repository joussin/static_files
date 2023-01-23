<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Export\Exporter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot(Exporter $exporter)
    {
        $exporter->crawl(false);

        $exporter->paths(['/']);

    }
}
