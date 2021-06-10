<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use function Roots\asset;

/**
 * Class App
 * @package App\View\Composers
 */
class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with(): array
    {
        return [
            'siteName' => $this->siteName(),
            'siteDescription' => $this->siteTagLine(),
            'siteIcon' => $this->siteIcon(),
            'siteUrl' => $this->siteUrl(),
            'isFrontPage' => is_front_page()
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName(): string
    {
        return get_bloginfo('name', 'display');
    }

    /**
     * Returns the site default URL
     *
     * @return string
     */
    public function siteUrl(): string
    {
        return get_home_url();
    }

    /**
     * Returns the site tagline
     *
     * @return string
     */
    public function siteTagLine(): string
    {
        return get_bloginfo('description');
    }

    /**
     * Returns the site icon
     *
     * @param int $size
     * @return string
     */
    public function siteIcon($size = 512): string
    {
        return get_site_icon_url($size) ?: asset('images/android-chrome-512x512.png')->uri();
    }
}
