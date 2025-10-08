<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\LongFormContents;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Content30Author extends Component
{
    public function __construct(public ?string $name = null, public ?string $position = null)
    {
    }

    public function render(): View
    {
        return $this->view('pjcomponents::long-form-contents.content-30-author');
    }
}
