<?php

namespace App\Http\Controllers;
use App\Models\Ecole;
use Illuminate\Http\Request;

class EcoleController extends Controller
{
    public function showEcoles()
    {
        $ecoles = Ecole::all(); 
        $count = Ecole::count();
        return view('ecoles')->with('ecoles', $ecoles);
    }

    public function addecoles( Request $request)
    {
        $ecoles = new Ecole();
        $ecoles->nom = $request->input('nom');
        $ecoles->adresse = $request->input('adresse');
        $ecoles->site = $request->input('site');
        $ecoles->ville = $request->input('ville');


        $ecoles->save();
        return redirect('/ecoles');
      
    }
    
        
    
}
