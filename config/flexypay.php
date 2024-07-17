<?php
// config/flexpay.php
return [
    'base_url' => env('FLEXPAY_BASE_URL', 'http://cardpayment.flexpay.cd'),
    'token' => env('FLEXPAY_TOKEN'),
    'merchant' => env('FLEXPAY_MERCHANT'),
    'callback_url' => env('FLEXPAY_CALLBACK_URL'),
    'approve_url' => env('FLEXPAY_APPROVE_URL'),
    'cancel_url' => env('FLEXPAY_CANCEL_URL'),
    'decline_url' => env('FLEXPAY_DECLINE_URL'),
];
