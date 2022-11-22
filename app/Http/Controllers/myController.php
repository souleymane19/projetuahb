<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function index(){
        $name = 'Aladin';
        $age =32;
        return view('myview', compact('name','age'));
    }
}
