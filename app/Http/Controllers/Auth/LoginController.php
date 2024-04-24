<?php
// Cannot declare class App\Http\Controllers\LoginController, because the name is already in use

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    protected $redirectAfterLogout = '/';

    function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

            $credentials = $request->only('email', 'password');
            if(Auth::attempt($credentials)){
                return redirect()->intended(route('dashboard'));
            } else {
                $account = User::where('email', $request->email)->first();
                if (!$account) {
                    session()->flash('flash', ['banner' => 'Account Doesn\'t Exist', 'bannerStyle' => 'danger']);
                } else {
                    if (!password_verify($request->password, $account->password)) {
                        session()->flash('flash', ['banner' => 'Password Incorrect', 'bannerStyle' => 'danger']);
                    } else {
                        session()->flash('flash', ['banner' => 'Authentication Error', 'bannerStyle' => 'danger']);
                    }
                }
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Authentication Error!');
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }
}
