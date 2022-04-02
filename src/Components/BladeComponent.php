<?php

declare(strict_types=1);

namespace Nvade\BulmaBlade\Components;

use Illuminate\View\Component;

abstract class BladeComponent extends Component
{
    protected static $assets = [];

    public static function assets(): array
    {
        return static::$assets;
    }
}