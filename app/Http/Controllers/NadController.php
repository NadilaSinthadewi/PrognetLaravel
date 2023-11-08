<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NadController extends Controller
{
    public function show(){
        return view("about");
    }
}
