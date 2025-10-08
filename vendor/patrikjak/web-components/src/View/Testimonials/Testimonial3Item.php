<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Testimonials;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Testimonial3Item extends Component
{
    public function __construct(
        public ?string $text = null,
        public ?string $author = null,
        public ?string $company = null,
    ) {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::testimonials.testimonial-3-item');
    }
}
