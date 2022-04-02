<?php

namespace Nvade\BulmaBlade\Components\Dropdown;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use Nvade\BulmaBlade\Components\BladeComponent;

class Item extends BladeComponent
{
    public function render(): View
    {
        return view('nvade:bb::components.dropdown.item');
    }
}
