<?php
// routes/web.php
use App\Http\Controllers\FlexPayController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::post('/payment', [FlexPayController::class, 'createPayment']);
Route::post('/api/flexpay/callback', [FlexPayController::class, 'handleCallback']);
