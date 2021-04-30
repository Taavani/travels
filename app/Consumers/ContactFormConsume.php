<?php

namespace App\Consumers;

use App\View\Composers\ContactForm;

/**
 * Class ContactFormConsume
 * @package App\Consumers
 */
class ContactFormConsume
{
    /**
     * ContactFormConsume constructor.
     */
    public function __construct()
    {
        if (function_exists('add_action')) {
            add_action('admin_post_' . ContactForm::METHOD, [ $this, 'handlePost' ]);
            add_action('admin_post_nopriv_' . ContactForm::METHOD, [ $this, 'handlePost' ]);
        }
    }

    /**
     * The function handlePost is intended to communicate with rd-mailform on the frontend
     * and as such the relevant statuscodes are:
     *
     * 'MF000': 'Successfully sent!',
     * 'MF001': 'Recipients are not set!',
     * 'MF002': 'Form will not work locally!',
     * 'MF003': 'Please, define email field in your form!',
     * 'MF004': 'Please, define type of your form!',
     * 'MF254': 'Something went wrong with PHPMailer!',
     * 'MF255': 'Aw, snap! Something went wrong.'
     */
    public function handlePost()
    {
        if (! function_exists('wp_verify_nonce')) {
            return 'MF255';
        }

        $callbackURL = wp_get_referer();
        $wpnonce = $_POST['_wpnonce'];

        // Bail on nonce fail
        if (! wp_verify_nonce($wpnonce)) {
            return 'MF255';
        }

        // Get request parameters
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        // Validate request parameters
        $parametersValid = $this->validateParameters($name, $email, $phone, $message);

        if ($parametersValid) {
            // Create request custom post type

            // Send emails

            // Return to route
        }

        return 'MF255';
    }

    private function validateParameters($name, $email, $phone, $message)
    {
        $valid = true;
        if (! isset($name) || ! isset($email) || ! isset($phone) || ! isset($message)) {
            $valid = false;
        }
        return $valid;
    }
}
