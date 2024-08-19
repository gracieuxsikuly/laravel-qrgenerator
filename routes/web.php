<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpleQRcodeController;

Route::get('/', function () {
    return view('welcome');
});
# la route "simple-qrcode"

Route::get('/simple-qrcode',[SimpleQRcodeController::class, 'generate'])->name('generate');
