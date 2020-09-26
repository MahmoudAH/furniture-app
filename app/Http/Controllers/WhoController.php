<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhoController extends Controller
{
    public function about()
    {
        return view('about');
    }    
    
}
