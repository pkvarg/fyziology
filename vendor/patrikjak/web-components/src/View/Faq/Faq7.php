<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Faq;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Faq7 extends Component
{
    public function __construct(
        public ?string $heading = null,
        public ?string $text = null,
        public ?string $secondaryHeading = null,
        public ?string $secondaryText = null,
    ) {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::faq.faq-7');
    }
}
