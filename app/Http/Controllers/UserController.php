<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Filiere;
use App\Models\Ecole;
use Spatie\Permission\Models\Role;
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
    public function ShowInscription()
    {
        $users = User::all();
        return view('inscription')->with('users', $users);

    }

    public function showAdminUsers() 
        {      
            $adminRole = Role::where('nom', 'admin')->first();
            $adminUsers = $adminRole->users;
            return view('administrateur')->with('adminUsers', $adminUsers );
        }
    
    

}
