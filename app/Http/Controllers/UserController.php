<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {

        $users = User::latest()->get();
        return view('/home', compact('users'));
    }

    public function destroy(User $user)
    {
        // dd($user);
        $user->delete();
        return back()->with('status','Eliminado con exito');

    }
}
