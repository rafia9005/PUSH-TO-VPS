<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class EditProfileController extends Controller
{
    public function updateName(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user->update([
            'name' => $request->name,
        ]);

        return redirect()->route('profile')->with('success', 'Name updated successfully');
    }

    public function updateEmail(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update([
            'email' => $request->email,
        ]);

        return redirect()->route('profile')->with('success', 'Email updated successfully');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user->password = bcrypt($validatedData['password']);
        $user->save();

        return redirect()->route('profile')->with('success', 'Password updated successfully!');
    }
}