<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function show(){
        return view("auth.login");
    }
    
    public function login(Request $request){
        if(Auth::attempt(["email"=>$request->email, "password"=>$request->password, $actif=>1])){
            $request->session()->regenerate();
            return redirect()->intended(); 
        }
        return back()->withErrors([
            'email' => 'Adresse email invalide!',
            ])->onlyInput('email');
        }
}
