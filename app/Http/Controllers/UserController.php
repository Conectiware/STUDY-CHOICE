<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Filiere;
use App\Models\Ecole;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function ShowUser()
    {
        $users = User::all();
        $count = User::count();
        $countfiliere = Filiere::count();
        $countecole = Ecole::count();
        return view('dashboard')->with('users', $users)->with('count', $count)->with('countfiliere', $countfiliere)->with('countecole', $countecole);
    }

}
