<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Auth;

class AuthController extends Controller
{


    public function register()
    {
        return view('auth.register');
    }

    public function save_register(Request $request)
    {
        $username = substr(str_replace(' ', '', strtolower($request->name)), 0, 8) . rand(3, 1000);
        $validatedData =   $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
        $validatedData['password'] = bcrypt($request->password);

        $validatedData['username'] = $username;


        $user = User::create($validatedData);
        if ($validatedData) {
            if (!auth()->attempt(['password' => $request->password, 'username' => $username])) {
                return redirect()->route('login');
            }
            return redirect('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function login_user(Request $request)
    {

        $validatedData =   $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validatedData) {
            if (!auth()->attempt($validatedData)) {
            }
            return redirect('/');
        } else {
            return view('auth.login');
        }
    }
}