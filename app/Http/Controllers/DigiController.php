<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigiController extends Controller
{
    public function index()
    {
        return view('digi.index');
        return 'Digi Dashboard';
    }
}
