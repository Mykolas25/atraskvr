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
        'client_id' => 'your-facebook-app-id',
        'client_secret' => 'your-facebook-app-secret',
        'redirect' => 'http://your-callback-url',
    ],

    'twitter' => [
        'client_id' => 'your-twitter-app-id',
        'client_secret' => 'your-twitter-app-secret',
        'redirect' => 'http://your-callback-url',
    ],

    'linkedin' => [
        'client_id' => 'your-linkedin-app-id',
        'client_secret' => 'your-linkedin-app-secret',
        'redirect' => 'http://your-callback-url',
    ],

    'google' => [
        'client_id' => 'your-google-app-id',
        'client_secret' => 'your-google-app-secret',
        'redirect' => 'http://your-callback-url',
    ],

    'github' => [
        'client_id' => 'your-github-app-id',
        'client_secret' => 'your-github-app-secret',
        'redirect' => 'http://your-callback-url',
    ],

    'bitbucket' => [
        'client_id' => 'your-bitbucket-app-id',
        'client_secret' => 'your-bitbucket-app-secret',
        'redirect' => 'http://your-callback-url',
    ],

];
