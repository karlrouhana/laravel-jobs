<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Schema\ValidationException;

class SessionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email'=> ['required', 'email'],
            'password'=> ['required']
        ]);

        if(!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email'=>'The provided credentials do not match our records.'
            ]);
        }

        $request->session()->regenerate();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}