<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('pages.login');
    }

    public function showRegisterForm(){
        return view('pages.register');
    }


    public function register(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email', 'string', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'username' => ['required', 'string'],
        ]);

        $user = User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'username' => $data['username'],
        ]);

        if ($user) {
            auth('web')->login($user);
        }

        return redirect(route('index'));
    }

    public function login(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required'],
        ]);


        auth('web')->attempt($data);

        return redirect(route('index'));
    }


    public function logout(){
        auth('web')->logout();
        return redirect(route('index'));
    }

}
