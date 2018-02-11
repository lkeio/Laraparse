<?php

namespace Lkeio\Laraparse;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaraparseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     * Bootstrap the Blade directive.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('laraparse', function ($expression) {
            return "<?php echo Laraparse::text($expression); ?>";
        });
    }

    /**
     * Register the package binding
     * in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laraparse', function () {
            return new Laraparse();
        });
    }
}
