<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Pricing;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PricingSharedItem1 extends Component
{
    public function __construct(
        public ?string $heading = null,
        public ?string $tagline = null,
        public ?string $subheading = null,
    ) {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::pricing.pricing-shared-item-1');
    }
}
