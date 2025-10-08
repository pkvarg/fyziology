<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Navbars;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar1 extends Component
{
    public function render(): View
    {
        return $this->view('pjcomponents::navbars.navbar-1');
    }
}
