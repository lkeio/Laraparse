<?php

namespace Lkeio\Laraparse;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaraparseServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('laraparse', function ($expression) {
              return "<?php echo (New Laraparse)->text($expression); ?>";
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laraparse',function(){
          return new Laraparse();
        });
    }

  }
