<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Headers;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header46 extends Component
{
    public function __construct(public ?string $heading = null, public ?string $text = null)
    {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::headers.header-46');
    }
}
