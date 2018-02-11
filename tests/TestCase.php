<?php

namespace Tests;

use Illuminate\View\Compilers\BladeCompiler;
use Lkeio\Laraparse\Laraparse;

/**
 * Class TestCase.
 */
abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected $laraparseInstance;
    protected $compilerInstance;
    protected $textGiven = '# test text';
    protected $textExpected = '<h1>test text</h1>';

    protected function getInstance()
    {
        if (!$this->laraparseInstance) {
            $this->laraparseInstance = new Laraparse();
        }

        return $this->laraparseInstance;
    }

    protected function getCompiler()
    {
        if (!$this->compilerInstance) {
            $this->compilerInstance = $this->app->make(BladeCompiler::class);
        }

        return $this->compilerInstance;
    }

    protected function getPackageProviders($app)
    {
        return ['Lkeio\Laraparse\LaraparseServiceProvider'];
    }
}
