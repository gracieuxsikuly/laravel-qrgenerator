# Installer simple-qrcode
composer require simplesoftwareio/simple-qrcode "~4"
# Créer un QR code avec simple-qrcode
<?php

use Illuminate\Support\Facades\Route;

# la route "simple-qrcode"
Route::get("simple-qrcode", "SimpleQRcodeController@generate");
