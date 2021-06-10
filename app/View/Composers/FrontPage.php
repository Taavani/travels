<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use function Roots\asset;

/**
 * Class FrontPage
 * @package App\View\Composers
 */
class FrontPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with(): array
    {
        return [
            'firstImage' => $this->firstImage(),
            'localsImage' => $this->localsImage(),
            'firstSeasonsGalleryImage' => $this->firstSeasonsGalleryImage(),
            'firstSeasonsPlaceholderImage' => $this->firstSeasonsPlaceholderImage(),
            'secondSeasonsGalleryImage' => $this->secondSeasonsGalleryImage(),
            'secondSeasonsPlaceholderImage' => $this->secondSeasonsPlaceholderImage(),
            'thirdSeasonsGalleryImage' => $this->thirdSeasonsGalleryImage(),
            'thirdSeasonsPlaceholderImage' => $this->thirdSeasonsPlaceholderImage(),
            'forthSeasonsGalleryImage' => $this->forthSeaonsGalleryImage(),
            'forthSeasonsPlaceholderImage' => $this->forthSeaonsPlaceholderImage(),
        ];
    }

    private function firstImage(): string
    {
        return asset('images/main-2400.tiff')->uri();
    }

    private function localsImage(): string
    {
        return asset('images/locals-2400.jpg')->uri();
    }

    private function firstSeasonsPlaceholderImage()
    {
        return asset('images/placeholder-bike-trail.jpg')->uri();
    }

    private function firstSeasonsGalleryImage()
    {
        return asset('images/gallery-bike-trail.jpg')->uri();
    }

    private function secondSeasonsPlaceholderImage()
    {
        return asset('images/placeholder-climbing.jpg')->uri();
    }

    private function secondSeasonsGalleryImage()
    {
        return asset('images/gallery-climbing.jpg')->uri();
    }

    private function thirdSeasonsPlaceholderImage()
    {
        return asset('images/placeholder-dog-sled.jpg')->uri();
    }

    private function thirdSeasonsGalleryImage()
    {
        return asset('images/gallery-dog-sled.jpg')->uri();
    }

    private function forthSeaonsGalleryImage()
    {
        return asset('images/gallery-kajak.jpg')->uri();
    }

    private function forthSeaonsPlaceholderImage()
    {
        return asset('images/placeholder-kajak.jpg')->uri();
    }
}
