<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // Create a public function 
    public function welcome()
    {
        return view('welcome');
    }
}
