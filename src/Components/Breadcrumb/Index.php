<?php

namespace Nvade\BulmaBlade\Components\Breadcrumb;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Nvade\BulmaBlade\Components\BladeComponent;

class Index extends BladeComponent
{
    public function render(): View
    {
        return view('nvade:bb::components.breadcrumb.index');
    }
}
