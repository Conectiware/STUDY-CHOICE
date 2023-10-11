<?php

namespace App\Http\Controllers;
use App\Models\Formation;
use App\Models\Preparation;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    //
    public function showAcceuil()
    {
        $formations = Formation::all(); 
        $count = Formation::count();
        $preparations = Preparation::all();
        return view('acceuil', compact('formations', 'count', 'preparations'));
    }
}
