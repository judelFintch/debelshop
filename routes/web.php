<?php

use App\Http\Controllers\FlexPayController;
use App\Http\Controllers\MaxiNotifyPaymentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/',  \App\Livewire\Products::class)->name('products');
Route::get('/contact', \App\Livewire\Contact\Contact::class)->name('contact');
Route::get('/articles', \App\Livewire\Articles\Articles::class)->name('articles');
Route::get('/about', \App\Livewire\About\About::class)->name('about');
Route::get('/{product}', \App\Livewire\ProductDatail::class)->name('show-product');

//a supprime au plus vide
Route::get('/accepted/payment', \App\Livewire\Payment\Success::class)->name('accepted.payment');

Route::group(['prefix' => 'process'], function () {

    Route::post('/payment', [FlexPayController::class, 'handlePayment'])->name('payment');
    Route::get('/accepted/payment', \App\Livewire\Payment\Success::class)->name('accepted.payment');
    Route::get('/rejected/payment', \App\Livewire\Payment\Reject::class)->name('rejected.payment');
    Route::get('/notification', [MaxiNotifyPaymentController::class, 'handleNotification'])->name('notification');
});
