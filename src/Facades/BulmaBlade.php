<?php

namespace Nvade\BulmaBlade\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nvade\BulmaBlade\BulmaBlade
 */
class BulmaBlade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bulma-blade-components';
    }
}
