<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function simpan(Request $request){


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt( $request->password)
        ]);
        return redirect('/')->with('alert_regis', 'Anda Berhasil Registrasi');
    }

    public function login(){
        return view('login');
    }

    public function ceklogin(Request $request){
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/')->with('alert_login', 'Username/Password Salah');
        }
        else{
            return redirect('/home')->with('alert_berhasil', 'Anda Berhasil Login');
        }
    }

    public function logout(){
        Auth::logout();
        return view('/login');
    }

}
