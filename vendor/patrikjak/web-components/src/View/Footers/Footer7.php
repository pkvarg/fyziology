<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Footers;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer7 extends Component
{
    public function __construct(public ?string $copyright = null, public ?string $text = null)
    {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::footers.footer-7');
    }
}
