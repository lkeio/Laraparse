<?php

namespace Lkeio\Laraparse;

use \Illuminate\Support\Facades\Facade;

class LaraparseFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'laraparse';
    }

}
