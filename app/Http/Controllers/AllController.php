<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use App\Models\Eleve;
use App\Models\Formation;
use App\Models\Typeformation;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index(){
        return view('home');
    }

    public function batiment(){
        $batiments = Batiment::all();
        return view('batiment', compact('batiments'));
    }

    public function formation(){
        $formations = Formation::all();
        return view('formation', compact('formations'));
    }

    public function typeformation(){
        $typeformations = Typeformation::all();
        return view('typeformation', compact('typeformations'));
    }

    public function eleve(){
        $eleves = Eleve::all();
        return view('eleve', compact('eleves'));
    }

    
}
