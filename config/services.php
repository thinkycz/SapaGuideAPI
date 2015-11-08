<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '536716046490752',
        'client_secret' => 'c84b53fa7ca8e2cec9969e74755ea0b9',
        'redirect' => 'http://localhost:8888/SapaGuideAPI/public/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'RXdShCkp5nmak7KyL8Q43VM22',
        'client_secret' => 'jNxFzRsDQC1rckaoGVbUbp7TuE5x3mROtODd28rDPs1u3l3RIy',
        'redirect' => 'http://localhost:8888/SapaGuideAPI/public/auth/twitter/callback',
    ],

    'google' => [
        'client_id' => '536716046490752',
        'client_secret' => 'c84b53fa7ca8e2cec9969e74755ea0b9',
        'redirect' => 'http://localhost:8888/SapaGuideAPI/public/auth/google/callback',
    ],

];
