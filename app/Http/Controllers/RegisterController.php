<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('/register.index' , [
            'title' => 'Registrasi Acount',
            'active' => 'login'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:2',
            'username' => ['required', 'min:4', 'max:200', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password'=> 'required|min:5|max:100'
    ]);

    // $validatedData['password'] = bcrypt($validatedData['password']);
    $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        $request->session()->flash('Success','Registration successfull!! Please Login Now');
        return redirect('/login');
    }
}
