<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainViewController extends Controller
{
    public function mainView()
    {
        return view('mainView'); 
    }
}
