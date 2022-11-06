<?php

namespace Masoudi\Nova\Breadcrumbs;

use Laravel\Nova\Card;

class Breadcrumbs extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = 'full';

    /**
     * The height strategy of the card.
     *
     * @var string
     */
    public $height = 'dynamic';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-breadcrumbs';
    }

    public function withBreadcrumbs(array $breadcrumbs)
    {
        return $this->withMeta(['breadcrumbs' => $breadcrumbs]);
    }
}
