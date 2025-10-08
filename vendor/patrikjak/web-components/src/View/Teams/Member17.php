<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Teams;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Member17 extends Component
{
    public function __construct(
        public ?string $name = null,
        public ?string $role = null,
        public ?string $text = null,
    ) {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::teams.member-17');
    }
}
