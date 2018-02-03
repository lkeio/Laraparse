<?php

namespace Lkeio\Laraparse;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Parsedown;

class LaraparseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      /**
      *  $this->compiler()->directive('laraparse', function ($expression) {
      *  return "<?php echo laraparse($expression); ?>";
      *});
      */
    }

    // /**
    //  * @return BladeCompiler
    //  */
    // protected function compiler()
    // {
    //     return app('view')->getEngineResolver()->resolve('blade')->getCompiler();
    // }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['laraparse'] = $this->app->share(function ($app) {
          return new Laraparse;
        });
    }

  }
