<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function show()
    {
        return view('profile');
    }
}
