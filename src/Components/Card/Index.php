<?php

namespace Nvade\BulmaBlade\Components\Card;

use Illuminate\Contracts\View\View;
use Nvade\BulmaBlade\Components\BladeComponent;

class Index extends BladeComponent
{
    public function render(): View
    {
        return view('nvade:bb::components.card.index');
    }
}
