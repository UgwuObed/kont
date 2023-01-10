<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;



class RegisterController extends Controller
{
    public function store(RegisterRequest $request)
    {
        $validatedData = $request->validate([
            "first_name" => "required|string|max:255",
            "last_name" => "required|string|max:255",
            "tiktok_username" => "required|string|max:255|unique:users|alpha_dash",
            "email" => "required|string|email|max:255|unique:users",
            "password" => "required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/|confirmed",
        ]);

        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'tiktok_username' => $validatedData['tiktok_username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        Auth::login($user);
        return redirect('/homepage');
    }
}
