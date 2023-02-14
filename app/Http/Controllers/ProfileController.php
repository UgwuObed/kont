<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function updatePicture(Request $request)
    {
        // Get the user ID
        $userId = Auth::user()->id;

        // Validate the uploaded file
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Store the uploaded file in storage/app/public/profile_pictures directory
        $fileName = $userId . '_' . time() . '.' . $request->profile_picture->extension();
        $request->profile_picture->storeAs('public/profile_pictures', $fileName);

        // Update the user's profile picture in the database
        $user = User::find($userId);
        $user->profile_picture = $fileName;
        $user->save();

        return redirect()->back()->with('success', 'Profile picture updated successfully.');
    }
}
