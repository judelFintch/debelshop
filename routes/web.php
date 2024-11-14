<?php 


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FlexPayController;
use App\Http\Controllers\MaxiNotifyPaymentController;
use Illuminate\Support\Facades\Route;

// Routes Livewire
Route::get('/', \App\Livewire\Products::class)->name('products');
Route::get('/contact', \App\Livewire\Contact\Contact::class)->name('contact');
Route::get('/articles', \App\Livewire\Articles\Articles::class)->name('articles');
Route::get('/about', \App\Livewire\About\About::class)->name('about');
Route::get('/product/{id}', \App\Livewire\ProductDatail::class)->name('show.product');
Route::get('/support', \App\Livewire\Guest\Support\Support::class)->name('support');
Route::get('/active', \App\Livewire\Guest\Error\Active::class)->name('active');


// Routes avec middleware auth
Route::middleware(['auth', 'verified', 'check.active'])->group(function () {
    Route::get('/dashboard', \App\Livewire\Admin\Home\Home::class)->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes de paiement
Route::group(['prefix' => 'process'], function () {
    Route::post('/payment', [FlexPayController::class, 'handlePayment'])->name('payment');
    Route::get('/accepted/payment', \App\Livewire\Payment\Success::class)->name('payment.accepted');
    Route::get('/rejected/payment', \App\Livewire\Payment\Reject::class)->name('payment.rejected');
    Route::get('/notification', [MaxiNotifyPaymentController::class, 'handleNotification'])->name('payment.notification');
});

// Authentification
require __DIR__.'/auth.php';
