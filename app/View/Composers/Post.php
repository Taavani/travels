<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content',
        'partials.content-*',
        'partials.page-sub'
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'id'    => get_the_ID(),
            'date'  => $this->date(),
            'title' => $this->title(),
            'author' => get_the_author(),
            'breadcrumbs' => $this->breadcrumbs()
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            /* translators: %s is replaced with the search query */
            return sprintf(
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }

    /**
     * @return false|string
     */
    public function date()
    {
        return get_the_date('d-m-Y', get_the_ID());
    }

    /**
     * @return array
     */
    public function breadcrumbs(): array
    {
        $breadcrumbs = collect([]);

        $breadcrumbs->add([
            'url' => get_option('home'),
            'name' => get_bloginfo('name')
        ]);

        if (is_single() || is_page()) {
            $breadcrumbs->add([
               'url' => null,
               'name' => $this->title()
            ]);
        }


        return $breadcrumbs->toArray();
    }
}
