<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Features;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout134 extends Component
{
    public function __construct(
        public ?string $heading = null,
        public ?string $tagline = null,
        public ?string $text = null,
    ) {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::features.layout-134');
    }
}
