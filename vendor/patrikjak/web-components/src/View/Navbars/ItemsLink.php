<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Navbars;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemsLink extends Component
{
    public function __construct(public string $text)
    {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::navbars.items-link');
    }
}
