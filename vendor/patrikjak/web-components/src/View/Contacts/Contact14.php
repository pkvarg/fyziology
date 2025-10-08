<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Contacts;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Contact14 extends Component
{
    public function __construct(
        public ?string $heading = null,
        public ?string $tagline = null,
        public ?string $text = null,
    ) {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::contacts.contact-14');
    }
}
