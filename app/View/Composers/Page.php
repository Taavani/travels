<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

/**
 * Class Page
 * @package App\View\Composers
 */
class Page extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content',
        'partials.content-*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with(): array
    {
        return [
            'featuredImage' => $this->featuredImage()
        ];
    }

    /**
     * @return string|null
     */
    private function featuredImage()
    {
        if (has_post_thumbnail()) {
            return get_the_post_thumbnail();
        }

        return null;
    }
}
