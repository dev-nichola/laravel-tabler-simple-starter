<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Masmerise\Toaster\Toaster;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request) : RedirectResponse
    {   
        $request->validated();

        $encrypt = Hash::make($request->password);

        User::query()->create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $encrypt
        ]);

        setToasterSuccess("Sukses Melakukan Register");
        
        return redirect()->route('login');
    }
}
