<?php

namespace Lkeio\Laraparse;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

use Laraparse;
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
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Laraparse',function(){
          return new Laraparse();
        });
    }

  }
