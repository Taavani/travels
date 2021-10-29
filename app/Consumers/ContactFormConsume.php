<?php

namespace App\Consumers;

use App\View\Composers\ContactForm;
use Carbon\Carbon;

use function Roots\view;

/**
 * Class ContactFormConsume
 * @package App\Consumers
 */
class ContactFormConsume
{
    /**
     *
     */
    public function bootstrap()
    {
        if (function_exists('add_action')) {
            add_action('wp_ajax_' . ContactForm::METHOD, array( $this, 'handlePost' ));
            add_action('wp_ajax_nopriv_' . ContactForm::METHOD, array( $this, 'handlePost' ));
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
            wp_send_json_error('MF255', '500');
        }

        $callbackURL = wp_get_referer();
        $wpnonce = $_POST['_wpnonce'];

        // Bail on nonce fail
        /*if (! wp_verify_nonce($wpnonce)) {
            wp_send_json_error('MF255');
        }*/

        // Get request parameters
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        // Validate request parameters
        $parametersValid = $this->validateParameters($name, $email, $phone, $message);

        if ($parametersValid) {
            // Create request custom post type
            $id = wp_insert_post([
                'post_type'  => 'travels-contact',
                'post_title' => Carbon::now()->format('d/m/Y') . ' : ' . $name
            ]);
            carbon_set_post_meta($id, 'travels_contact_name', $name);
            carbon_set_post_meta($id, 'travels_contact_email', $email);
            carbon_set_post_meta($id, 'travels_contact_phone', $phone);
            carbon_set_post_meta($id, 'travels_contact_message', $message);

            // Send emails
            $data = [
                'appTitle' => "#TravelsToGreenland",
                'url' => get_home_url(),
                'ref' => $id,
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'message' => $message,
                'year'  => date('Y'),
                'allRights' => 'All rights reserved.'
            ];

            // System email to TravelsToGreenland
            wp_mail(
                $email,
                __('New enquery', 'travels'),
                view('emails/application/order', $data)->render()
            );

            // System email to Customer
            wp_mail(
                $email,
                __('Thank you for reaching out', 'travels'),
                view('emails/application/received', $data)->render()
            );
        }

        wp_send_json_success('MF000');
    }

    /**
     * @param $name
     * @param $email
     * @param $phone
     * @param $message
     * @return bool
     */
    private function validateParameters($name, $email, $phone, $message): bool
    {
        $valid = true;
        if (! isset($name) || ! isset($email) || ! isset($phone) || ! isset($message)) {
            $valid = false;
        }
        return $valid;
    }
}
