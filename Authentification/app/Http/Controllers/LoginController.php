<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function reveal(){
        return view('reveal');
    }

    public function login(){
        return view('form');
    }

    public function create(LoginRequest $request){
        Login::create($request->all()); 
        return redirect()->route('reveal');
    }

}
