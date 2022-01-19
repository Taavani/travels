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

        $wp_nonce = $_POST['_wpnonce'];

        // Bail on nonce fail
        if (! wp_verify_nonce($wp_nonce, ContactForm::METHOD)) {
            wp_send_json_error('MF255');
        }

        // Get request parameters
        $name    = $_POST['name'];
        $email   = $_POST['email'];
        $phone   = $_POST['phone'];
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
                'appTitle'  => "#TravelsToGreenland",
                'url'       => get_home_url(),
                'ref'       => $id,
                'name'      => $name,
                'phone'     => $phone,
                'email'     => $email,
                'message'   => $message,
                'year'      => date('Y'),
                'allRights' => 'All rights reserved.'
            ];

            // Validate with akismet
            $is_spam = $this->akismet_check_spam([
                'comment_author' => $name,
                'comment_author_email' => $email,
                'comment_content' => $message
            ]);

            // Only generate email if content is not spam.
            if (! $is_spam) {
                // System email to TravelsToGreenland
                wp_mail(
                    'info@travelstogreenland.com',
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
        }

        wp_send_json_success('MF000');
    }

    /**
     * @param $name
     * @param $email
     * @param $phone
     * @param $message
     *
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

    /**
     * @param array $content :
     *
     * @return false
     */
    private function akismet_check_spam(array $content): bool
    {

        $is_spam = false;

        if (function_exists('akismet_init') && function_exists('akismet_http_post')) {
            $wpcom_api_key = get_option('wordpress_api_key');

            if (! empty($wpcom_api_key)) {
                global $akismet_api_host, $akismet_api_port;

                // set remaining required values for akismet api
                $content['user_ip']    = preg_replace('/[^0-9., ]/', '', $_SERVER['REMOTE_ADDR']);
                $content['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
                $content['referrer']   = $_SERVER['HTTP_REFERER'];

                $content['blog'] = get_option('home');

                if (empty($content['referrer'])) {
                    $content['referrer'] = get_permalink();
                }

                $queryString = '';

                foreach ($content as $key => $data) {
                    if (! empty($data)) {
                        $queryString .= $key . '=' . urlencode(stripslashes($data)) . '&';
                    }
                }

                $response = akismet_http_post($queryString, $akismet_api_host, '/1.1/comment-check', $akismet_api_port);

                if ($response[1] == 'true') {
                    update_option('akismet_spam_count', get_option('akismet_spam_count') + 1);
                    $is_spam = true;
                }
            }
        }

        return $is_spam;
    }
}
