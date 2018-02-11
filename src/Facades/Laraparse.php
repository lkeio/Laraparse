<?php

namespace Lkeio\Laraparse\Facades;

use Illuminate\Support\Facades\Facade;

class Laraparse extends Facade
{
    /**
     * Get the registered name.
     *
     * @return string laraparse the name of the Facade Accessor
     */
    protected static function getFacadeAccessor()
    {
        return 'laraparse';
    }
}
