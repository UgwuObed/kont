<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;


class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            "first_name" => "required|string|max:255",
            "last_name" => "required|string|max:255",
            "tiktok_username" => "required|string|max:255",
            "email" => "required|string|email|max:255|unique:users",
            "password" => "required|string|min:6|confirmed",
        ]);

        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'tiktok_username' => $validatedData['tiktok_username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Login the user and redirect to the dashboard or home page
    }
}
