<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRController extends Controller
{
    public function showScanner()
    {
        return view('qr.scanner');
    }
}
