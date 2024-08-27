<?php
// routes/web.php
use App\Http\Controllers\FlexPayController;
use App\Http\Controllers\MaxiCancelPaymentController;
use App\Http\Controllers\MaxiNotifyPaymentController;
use App\Http\Controllers\MaxiPaymentAccceptedController;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Products::class)->name('products');
Route::get('/{product}', \App\Livewire\ProductDatail::class)->name('show-product');

Route::group(['prefix' => 'process'], function () {
    Route::get('/accepted/payment', MaxiPaymentAccceptedController::class)->name('accepted.payment');
    Route::get('/rejected/payment', MaxiCancelPaymentController::class)->name('rejected.payment');
    Route::get('/notification', MaxiNotifyPaymentController::class)->name('notification');
});

// https://api-testbed.maxicashme.com/PayEntryPost
//Pour le compte test, vous pouvez utiliser cette carte test pour tester :
//- Card number: 4000000000000002
//- CVV: 123
//- Expiry Date: 12/2021.
