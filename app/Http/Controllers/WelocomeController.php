<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelocomeController extends Controller
{
    public function Welcome()
    {
        return view("welcome");
    }
}
