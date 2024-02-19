<?php
return [
    'goid' => env('GOPAY_GOID'),
    'clientId' => env('GOPAY_CLIENT_ID'),
    'clientSecret' => env('GOPAY_CLIENT_SECRET'),
    'defaultScope' => 'ALL', //GoPay\Definition\TokenScope Constants
    'languages' => [
        'sk' => 'SLOVAK'
    ],
    //Map Laravel languages to GoPay\Definition\Language Constants
    'gatewayUrl' => 'https://gate.gopay.cz/',
    'timeout' => 15,
    'is_production' => env('GOPAY_IS_PRODUCTION')
];