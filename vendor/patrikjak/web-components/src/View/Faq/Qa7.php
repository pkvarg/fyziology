<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Faq;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Qa7 extends Component
{
    public function __construct(public ?string $question = null, public ?string $answer = null)
    {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::faq.qa-7');
    }
}
