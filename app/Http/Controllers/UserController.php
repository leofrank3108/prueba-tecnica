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
    public function edit(User $user)
    {
        return view('/edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        //dd($request->all()  );
        $user->update($request->all());
       $user->save;
        return back()->with('status', 'Actualizado con exito');
        
    }
}
