<?php

namespace Nvade\BulmaBlade\Components\Dropdown;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use Nvade\BulmaBlade\Components\BladeComponent;

class Index extends BladeComponent
{
    protected static $assets = [
        'jquery'
    ];

    public function render(): View
    {
        return view('nvade:bb::components.dropdown.index');
    }
}
