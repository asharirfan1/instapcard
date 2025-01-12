<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * These are the endpoints that do not require CSRF token validation,
     * typically because they are used by third-party services like Razorpay and PhonePe,
     * which send callbacks directly to your server without CSRF tokens.
     *
     * @var array
     */
    protected $except = [
        '/admin/razorpay-payment-success',           // Razorpay payment success callback for admin panel
        '/admin/razorpay-payment-failed',            // Razorpay payment failure callback for admin panel
        '/admin/nfc-razorpay-payment-success',       // NFC Razorpay payment success callback for admin panel
        '/admin/nfc-razorpay-payment-failed',        // NFC Razorpay payment failure callback for admin panel
        '/product-razorpay-payment-success',         // Razorpay payment success callback for product page
        '/product-razorpay-payment-failed',          // Razorpay payment failure callback for product page
        '/phonepe-subscription-response',            // PhonePe subscription response callback
        '/phonepe-nfcorder-response',                // PhonePe NFC order response callback
        '/phonepe-appointmentbook-response',         // PhonePe appointment booking response callback
        '/phonepe-Product-response'                 // PhonePe product purchase response callback
    ];
}
