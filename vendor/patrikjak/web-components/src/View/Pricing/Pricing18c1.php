<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Pricing;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Pricing18C1 extends Component
{
    public function __construct(
        public ?string $heading = null,
        public ?string $tagline = null,
        public ?string $text = null,
    ) {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::pricing.pricing-18c1');
    }
}
