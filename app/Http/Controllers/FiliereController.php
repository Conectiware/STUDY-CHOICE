<?php

namespace App\Http\Controllers;
use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    //
    public function showAcceuil()
    {
        $filieres = Filiere::all(); 
        $count = Filiere::count();
        return view('acceuil', compact('filieres', 'count'));
    }
}
