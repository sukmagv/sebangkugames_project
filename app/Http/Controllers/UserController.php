<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('name', '!=', 'admin')->get();
        return view('profile', compact('users'));
    }

    public function approve(Request $request, User $user)
    {
        $user->update(['status' => 1]);
        return redirect()->back()->with('message', 'User approved successfully');
    }
}
