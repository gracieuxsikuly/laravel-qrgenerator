<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
# 1. La facade QrCode
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class SimpleQRcodeController extends Controller
{
    public function generate()
    {
        # 2. On génère un QR code de taille 200 x 200 px
    	// $qrcode = QrCode::size(200)->generate("Je suis un QR Code je doit etre scanne");
        // $qrcode = QrCode::size(200)->generate("Je suis un QR Code", 'public/codes-qr/texte.svg');
        $qrcode = QrCode::size(200)->generate("Je suis un QR Code je doit etre scanne", public_path('codes-qr/texte.svg'));

    	# 3. On envoie le QR code généré à la vue "simple-qrcode"
    	return view("simple-qrcode", compact('qrcode'));
        // return view('simple-qrcode');
    }
}
