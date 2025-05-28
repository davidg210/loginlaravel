<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    /*public function index(Request $request)
    {
        Auth::logout();
        return view('login');//->route('home');
    }*/

    public function index(Request $request)
{
    if (Auth::check()) {
        return redirect('/usuarios');
    }
    return view('login');
}

    
    
    public function login(Request $request)
    {
        //return redirect("/usuarios");//->route('home');


        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            
            $request->session()->regenerate();
 
            return redirect()->intended('/usuarios');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    

    public function logout(Request $request){

        Auth::logout(); 
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect('/login');
    }


    public function validateAccount($token)
    {
        $user = User::where('remember_token', $token)->first();
        if ($user && $user->remember_token == $token) {
            $user->remember_token = null;
            $user->save();
            return redirect('/login')->with('success' , 'Account confirmed successfully.'); 

        } else {
            return redirect('/login')->with('error' , 'Invalid token.');
        }
    }
      
}

