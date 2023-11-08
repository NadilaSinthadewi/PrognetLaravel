<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerNad extends Controller
{
    public function home(){
        return view('insert');
    }

    public function show(Request $send){
        return view('hasil', compact('send'));
    }
}
