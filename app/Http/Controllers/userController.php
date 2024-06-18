<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\userModel ;

class userController extends Controller
{
    public function index () {
        return view('login');
    }

    public function registerForm (){
        return view('register');
    }

    public function store (Request $request) {

        $formFields = $request->validate([
            'namalengkap'=> ['required' , 'min:3'], 
            'email'=> ['required', 'email','unique:users'] ,
            'password' => ['required' , 'confirmed'] , 
            'notelp' => ['required'] , 
            'alamat' => ['required'] , 
        ]);

        //hash password
        $formFields['password'] = bcrypt($formFields['password']);
        
        //Create User
        $user = userModel::create($formFields);

        //login
        auth()->login($user);

        return redirect('/');
    }

    public function authenticate(Request $request) {

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        // Log form fields to debug
        Log::info('Form Fields:', $formFields);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        Log::info('Authentication failed for:', $formFields);

        return back()->withErrors(['email' => 'Invalid email or password']);
    }
}
