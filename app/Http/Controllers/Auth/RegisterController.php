<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:250',
                'email' => 'required|email|max:250|unique:users',
                'password' => 'required|min:8|confirmed'
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            if ($user) {
                $credentials = $request->only('email', 'password');
                Auth::attempt($credentials);
                $request->session()->regenerate();

                // session()->flash('flash', ['banner' => 'You have successfully registered & logged in!', 'bannerStyle' => 'success']);

                return redirect()->route('dashboard');
            }
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors());
        }
        return redirect()->back();
    }
}
