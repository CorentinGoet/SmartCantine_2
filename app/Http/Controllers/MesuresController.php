<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MesuresController extends Controller
{
    public function index(){
        return view('SmartCantine/mesures');
    }
}
