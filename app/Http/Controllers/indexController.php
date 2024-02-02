<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stand;

class indexController extends Controller
{
    public function index()
    {
        $stands = Stand::all();
        return view('index', compact('stands'));
    }
}
