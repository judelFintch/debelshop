<?php


use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Products::class)->name('products');
Route::get('/{product}', \App\Livewire\ProductDatail::class)->name('show-product');

Route::group(['prefix' => 'process'], function () {
    Route::post('/payment', FlexPayController::class)->name('payment');
    Route::get('/accepted/payment', \App\Livewire\Payment\Success::class)->name('accepted.payment');
    Route::get('/rejected/payment', \App\Livewire\Payment\Reject::class)->name('rejected.payment');
    Route::get('/notification', MaxiNotifyPaymentController::class)->name('notification');
});

// https://api-testbed.maxicashme.com/PayEntryPost
// Pour le compte test, vous pouvez utiliser cette carte test pour tester :
// - Card number: 4000000000000002
// - CVV: 123
// - Expiry Date: 12/2025.
