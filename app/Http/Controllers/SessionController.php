<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function loginForm(){
        return view('session.login');
    }

    public function loginUser(Request $request){
        request()->validate([
            'email'=>'required'
        ]);
        $email = $request->get('email');
        $password = $request->get('password');
        return "El password es $password y el email es $email";
    }


}
