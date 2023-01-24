<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilePictureController extends Controller
{
    public function edit()
    {
        return view('profile.edit-picture');
    }

    public function update(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'picture' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the uploaded file
        $picture = $request->file('picture');
        $fileName = time() . '.' . $picture->getClientOriginalExtension();
        $picture->storeAs('public/profile_pictures', $fileName);

        // Save the file path to the database
        $user = Auth::user();
        $user->profile_picture = $fileName;
        $user->save();

        return redirect()->back()->with('success', 'Profile picture updated successfully!');
    }
}
