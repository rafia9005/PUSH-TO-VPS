<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $title = "Profile Panel";
        $users = User::paginate(5);
        $user = auth()->user();
        return view('profile', compact('title', 'totalUsers', 'users', 'user'));
    }
    public function profileEdit()
    {
        $title = "Profile Edit Panel";
        $users = User::paginate(5);
        $user = auth()->user();
        return view('PUT.profile-edit', compact('title', 'users', 'user'));
    }
}
