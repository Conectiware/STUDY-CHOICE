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

    public function addformation( Request $request)
    {
        $formation = new Formation();
        $formation->nom = $request->input('nom');
        $formation->intitule = $request->input('intitule');
        $formation->niveau = $request->input('niveau');
        $formation->date_debut = $request->input('date_debut');
        $formation->duree = $request->input('duree');
        $formation->type_cours = $request->input('type_cours');
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('formations', 'public');
            $formation->image = $imagePath;
    }
    
        $formation->save();
        redirect('formation');
    }
    public function search()
    {
        $q = request()->input('q');
        
        $formations = Formation::where('nom', 'like', "%q%")
         ->orWhere('intitule','like',"%" .$q. "%")
         ->paginate(6);
         return view('formations.search')->with('formations', $formations);
    }

}

        

    

