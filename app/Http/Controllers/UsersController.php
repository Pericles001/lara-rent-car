<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function show($id)
    {
   

        return view('users.show')->with([
            'id' => User::findOrFail($id),
          
        ]);
    }

    public function create()
    {
        return view('users.register');
    }



    public function register(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
            'tel' => 'required',
            'ville' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tel' => $request->tel,
            'ville' => $request->ville
        ]);
        return redirect()->route('users.login')->with([
            'success' => 'Compte créé'
        ]);
    }




    public function login()
    {
        return view('users.login');
    }

    public function auth(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('cars.index');
        } else {
            return redirect()->route('users.login')->with([
                'error' => 'Email ou mot de passe incorrect'
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('cars.index');
    }
}
