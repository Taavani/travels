<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Post;

class ContactForm extends Composer
{
    public const METHOD = 'travels_contact_form';

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'components.contact-form',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with(): array
    {
        return [
            'methodName' => self::METHOD,
            'nounce' => $this->generateNounce()
        ];
    }

    /**
     * @return array|WP_Post|null
     */
    private function getPost()
    {
        if (! function_exists('get_post')) {
            return null;
        }
        return get_post();
    }

    /**
     * @return string|null
     */
    private function generateNounce(): ?string
    {
        if (! function_exists('wp_nonce_field')) {
            return null;
        }

        return wp_nonce_field(self::METHOD, '_wpnonce', true, false);
    }
}
