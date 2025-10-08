<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Galleries;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Gallery3 extends Component
{
    public function __construct(public ?string $heading = null, public ?string $text = null)
    {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::galleries.gallery-3');
    }
}
