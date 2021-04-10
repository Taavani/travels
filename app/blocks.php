<?php
/**
 *
 */

namespace App;

use function Roots\asset;

/**
 * This Block is used to enqueue all the Gutenberg blocks in this theme.
 *
 */
add_action('init', function () {
    wp_enqueue_script('travels/centered-content.js', asset('scripts/centered-content.js')->uri(), [], null, true);
    wp_enqueue_script('travels/existing-products.js', asset('scripts/existing-products.js')->uri(), [], null, true);
});
