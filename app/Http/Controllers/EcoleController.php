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
    
}
