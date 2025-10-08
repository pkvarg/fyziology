<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\View\LongFormContents;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Content30Breadcrumbs extends Component
{
    public bool $asLink = true;

    /**
     * @param array<string>|array<array{'url': string, 'label': string}> $breadcrumbs
     */
    public function __construct(public array $breadcrumbs = [])
    {
        foreach ($this->breadcrumbs as $breadcrumb) {
            if (isset($breadcrumb['url'])) {
                $this->asLink = true;

                break;
            }
        }
    }

    public function render(): View
    {
        return $this->view('pjcomponents::long-form-contents.content-30-breadcrumbs');
    }
}
