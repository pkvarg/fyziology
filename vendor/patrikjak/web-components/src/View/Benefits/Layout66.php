<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\Benefits;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout66 extends Component
{
    /**
     * @param array<string>|null $benefits
     */
    public function __construct(
        public ?string $heading = null,
        public ?string $text = null,
        public ?array $benefits = null,
    ) {
    }

    public function render(): View
    {
        return view('pjcomponents::benefits.layout-66');
    }
}