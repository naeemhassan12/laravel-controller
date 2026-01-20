<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showCase(){
        return view('partials.about');
    }

    public function userCase(){
        return view('partials.contact');
    }
}
