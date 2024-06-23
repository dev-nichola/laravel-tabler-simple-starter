<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request) : RedirectResponse
    {
        $request->validated();

        $credentials = $request->only(['email', 'password']);

        if(auth()->attempt($credentials))
        {
            session()->regenerateToken();

            return redirect()->route("users");
        }

        return redirect()->back();
    }

    public function logout() : RedirectResponse
    {
        session()->flush();

        auth()->logout();

        return redirect()->route('login');
    }
}
