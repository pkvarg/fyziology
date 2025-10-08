<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Pricing;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PricingSharedPlanBenefit1 extends Component
{
    public function __construct(public ?string $text = null)
    {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::pricing.pricing-shared-plan-benefit-1');
    }
}
