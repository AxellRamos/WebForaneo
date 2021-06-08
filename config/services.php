<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyCjXtgusu2pnKfE58NLaeNELkjA5_On9do',
        'auth_domain' => 'crudlaravel-a46ff.firebaseapp.com',
        'database_url' => 'https://crudlaravel-a46ff-default-rtdb.firebaseio.com',
        'project_id' => 'crudlaravel-a46ff',
        'storage_bucket' => 'crudlaravel-a46ff.appspot.com',
        'messaging_sender_id' => '920899005483',
        'app_id' => '1:920899005483:web:3feaf39ddd388cd2128e6e',
        'measurement_id' => 'G-GPYEWSQWP9',
    ],

];
