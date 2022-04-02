<?php

namespace Nvade\BulmaBlade\Components\Card;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Index extends Component
{
    public function render(): View
    {
        return view('components.card.index');
    }
}
