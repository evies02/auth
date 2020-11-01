<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyController extends Controller
{
    //

    public function index () {

        $user = \Auth::user(); // user as variable
        
        return view('dummy', compact('user'));
    }
}
