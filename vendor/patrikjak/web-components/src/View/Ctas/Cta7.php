<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Ctas;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cta7 extends Component
{
    public function __construct(public ?string $heading = null, public ?string $text = null)
    {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::ctas.cta-7');
    }
}
