<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincimpalController extends Controller
{
    public function princimpal ()
    {
        return view('site.princimpal');
    }
}
