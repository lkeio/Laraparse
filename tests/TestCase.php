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

    /**
     * Get the Instance of the Laraparse Parser class.
     *
     * @return object Laraparse
     */
    protected function getInstance()
    {
        if (!$this->laraparseInstance) {
            $this->laraparseInstance = new Laraparse();
        }

        return $this->laraparseInstance;
    }

    /**
     * Get the Instance of the BladeCompiler Class.
     *
     * @return object BladeCompiler
     */
    protected function getCompiler()
    {
        if (!$this->compilerInstance) {
            $this->compilerInstance = $this->app->make(BladeCompiler::class);
        }

        return $this->compilerInstance;
    }

    /**
     * Loads The packages Service Provider.
     *
     * @param object $app
     *
     * @return string package service provider
     */
    protected function getPackageProviders($app)
    {
        return ['Lkeio\Laraparse\LaraparseServiceProvider'];
    }
}
