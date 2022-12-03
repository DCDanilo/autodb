<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        return view('user.register');
    }

    public function store(Request $request){

        // dd($request);
        $this->validate($request,[
            'name'      => 'required|max:100',
            'email'     => 'required|max:255|email',
            'password'  => 'required|confirmed'
        ]);
        
        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);

        dd(store);

        return redirect()->route('/');
    }
}
