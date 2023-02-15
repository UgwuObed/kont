<?php

namespace App\Http\Controllers\Auth;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Illuminate\Foundation\Auth\EmailVerificationRequest;



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

        // Send verification email
        Mail::to($user)->send(new VerifyEmail($user));

        // Redirect the user to a page informing them to check their email
        return redirect('/verify-email');
    }
}

class VerificationController extends Controller
{
    public function notice()
    {
        return view('auth.verify-email');
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/homepage');
    }

    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('success', 'Verification link sent!');
    }
}