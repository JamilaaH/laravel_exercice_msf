<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index(){
        return view('home');
    }

    public function batiment(){
        return view('batiment');
    }

    public function formation(){
        return view('formation');
    }

    public function typeformation(){
        return view('typeformation');
    }

    public function eleve(){
        return view('eleve');
    }

    
}
