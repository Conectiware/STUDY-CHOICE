<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle(Request $request)
    {
    //dd($request);
        try {
            $google_user = Socialite::driver('google')->user();
            //dd($google_user->user['email']);
            $user = User::where('email', $google_user->user['email'])->first();
    
            if (!$user) {
                $new_user = User::create([
                    'name' => $google_user->user['name'],
                    'email' => $google_user->user['email'],
                    'google_id' => $google_user->user['id']
                ]);
                Auth::login($new_user);
    
                return redirect()->route('acceuil'); 
            } else {
                Auth::login($user);
                return redirect()->route('acceuil'); 
            }


            Session::start();

            $userName = session('user_name');
            $firstLetter = strtoupper(substr($userName, 0, 1));
            session(['user_initial' => $firstLetter]);

            
        } catch (Exception $e) {
            dd('Une erreur veuillez réessayer ' . $e->getMessage());
        }
    }
    
}
