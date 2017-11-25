<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
    'client_id' => '295847407601607',
    'client_secret' => '062f0ac70590cc1a5a168b124914b1d8',
    'redirect' => 'http://127.0.0.1:8000/callback/facebook',
    ],
    'twitter' => [
    'client_id' => 'AziQnvvPrBiyhSGtT5MeesPnN',
    'client_secret' => 'ObXeUB8d5z86NagemztSI52hBbLx4WtNs40CFAJyjrtSVASSCd',
    'redirect' => 'http://127.0.0.1:8000/callback/twitter',
    ],
    'google' => [
    'client_id' => '976129352801-vrlbnh7euf4s65slaod6bs8eirku5s76.apps.googleusercontent.com',
    'client_secret' => 'jrhW_3b5pziU6IwCT48F8597',
    'redirect' => 'http://127.0.0.1:8000/callback/google',
    ],

];
