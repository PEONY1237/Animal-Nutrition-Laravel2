<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class loginController extends Controller
{
    public function show(){
        return view('AuthClient.ClientConnect');
    }

    public function login(Request $request){

        $email = $request->email;
        $password = $request->password;

        $credentials = ['email' => $email, 'password' => $password];

        dd(Auth::attempt($credentials));

        // dd(Auth::attempt($request->only('email', 'password')));
        // if(Auth::attempt($credentials)){
        //     // Connecter
        //     // $request->session()->regenerate();
        //     // return redirect()->intended(route('index.home'));
            
        // }else{
        //     // Pas Connecter 
        //     return back()->withErrors([
        //         'email' => 'Email ou mot de passe incorrect'
        //     ])->onlyInput('email');
        // }
    }
    
    // public function logout(){
    //     FacadesSession::flush();
    //     Auth::logout();
    //     return to_route('auth.login')->with('success',  'Vous etes bien Deconnecte');
    // }
}
