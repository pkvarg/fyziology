<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\LongFormContents;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Content7 extends Component
{
    public function __construct(public ?string $heading = null, public ?string $text = null)
    {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::long-form-contents.content-7');
    }
}
