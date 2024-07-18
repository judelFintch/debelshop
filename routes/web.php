<?php
// routes/web.php
use App\Http\Controllers\FlexPayController;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Products::class)->name('products');
Route::get('/{product}', \App\Livewire\ProductDatail::class)->name('show-product');

Route::post('process', FlexPayController::class)->name('process');
