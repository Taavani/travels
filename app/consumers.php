<?php

/**
 *
 */

namespace App;

use App\Consumers\ContactFormConsume;

/**
 * Load the different consumers
 */
add_action('after_setup_theme', function () {

    new ContactFormConsume();
});
