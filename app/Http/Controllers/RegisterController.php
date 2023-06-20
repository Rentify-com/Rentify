<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max : 255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'telp' => 'required',
            'tipe' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'tipe' => $validatedData['tipe'],
            'telp' => $validatedData['telp'],
        ]);

        return redirect('/login')->with('success','Registration succesfull! please login!');
    }

}
