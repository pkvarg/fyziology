<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Teams;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Social17 extends Component
{
    public function __construct(public ?string $link = null)
    {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::teams.social-17');
    }
}
