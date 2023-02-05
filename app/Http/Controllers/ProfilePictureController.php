<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\AddProfilePictureToUsersTable;




class ProfilePictureController extends Controller
{
    public function uploadProfilePicture(Request $request)
    {
        try {
            // Validate the image file
            $request->validate([
                'profile_picture' => 'required|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048|size:2048',
            ]);

            //Check if user is authenticated
            if (!Auth::check()) {
                return redirect()->back()->with('error', 'You must be logged in to perform this action');
            }

            // Delete existing profile picture if exists
            $user = Auth::user();
            if ($user->profile_picture) {
                Storage::delete($user->profile_picture);
            }

            // Store the image file
            $path = $request->file('profile_picture')->storeAs('public/profile_pictures', uniqid() . '.' . $request->file('profile_picture')->getClientOriginalExtension());

            // Update the user's record in the database
            $user->profile_picture = $path;
            $user->save();

            // Return a redirect response
            return redirect()->back()->with('success', 'Profile picture uploaded successfully');
        } catch (\Exception $e) {
            // Return an error response
            return redirect()->back()->with('error', 'An error occurred while uploading the profile picture: ' . $e->getMessage());
        }
    }

    public function deleteProfilePicture(Request $request)
    {
        try {
            //Check if user is authenticated
            if (!Auth::check()) {
                return redirect()->back()->with('error', 'You must be logged in to perform this action');
            }

            // Get the authenticated user
            $user = Auth::user();

            // Delete the profile picture if it exists
            if ($user->profile_picture) {
                Storage::delete($user->profile_picture);
                $user->profile_ picture = null;
                $user->save();
            }

            // Return a redirect response
            return redirect()->back()->with('success', 'Profile picture deleted successfully');
        } catch (\Exception $e) {
            // Return an error response
            return redirect()->back()->with('error', 'An error occurred while deleting the profile picture: ' . $e->getMessage());
        }
    }
}
