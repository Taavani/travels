<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use function Roots\asset;

class AboutPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'page-about',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with(): array
    {
        return [
            'backgroundImage' => asset('/images/gallery-sunset.jpg'),
        ];
    }
}
