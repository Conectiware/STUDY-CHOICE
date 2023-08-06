<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    public function showFormation()
    {
        $formations = Formation::all(); 
        $count = Formation::count();
        return view('formation', compact('formations', 'count'));
    }
}
