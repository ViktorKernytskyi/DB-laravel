<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function list()
    {
        $users = User::select(['*'])->get();

        return view('users.list', ['users' => $users]);

    }

    public function form( User $variable )
    {
        return view('users.form', ['user' => $variable]);
    }


    public function update(Request $request, User $user)
    {

        $user->name = $request->get('name', 'Durak');
        $user->email = $request->get('email', 'Durak-@ukr.net');

        $user->save();

        return redirect()->route('users.list');
    }

    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        //if($request->get('password')){
            $user->password = \Hash::make($request->get('password'));
       //}

        $user->save();

        return redirect()->route('users.list');
    }

    public function destroy ( $id)
    {

        $user = user::find($id);
        if ($user) {
            $user->destroy($id);
        }

        return redirect()->route('users.list');
    }

}
