<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\History;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }
    public function destroy($userId)
    {
        $user = User::findOrFail($userId);
        $user->delete();
        return redirect()->back();
    }
    public function edit()
    {
        $user = Auth::user();
        return view('pages.profil', compact('user'));
    }
    public function history()
    {
        $user = Auth::user();
        $history = History::where('user_id', $user->id)->get();
        return view('pages.history', ['history' => $history]);
    }
    //

    public function update(Request $request, $user_id)
{
    $user = User::findOrFail($user_id);

    
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,'.$user_id,
        'password' => 'nullable|string|min:8|confirmed',
    ]);

    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];

    if ($request->has('password')) {
        $user->password = bcrypt($validatedData['password']);
    }

    $user->save();

    return redirect()->back()->with('success', 'User updated successfully');
}
}
