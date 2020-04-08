<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class usercontroller extends Controller
{
    public function index(){
        $user = user::all();
        return view('user',['user' => $user]);
    }
    public function edit($id){
        $user = user::find($id);
        return view('useredit', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
         $user = user::find($id);
         $user->name = $request->name;
         $user->nis = $request->nis;
         $user->email = $request->email;
         $user->role = $request->role;
         $user->save();
         return redirect('user');
    }

    public function destroy($id)
    {
    $user = user::find($id);
    $user->delete();
    return redirect('user');
    }

    public function create(){
        return view('inputuser');
    }

    public function store(Request $request)
    {
        user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nis' => $request->nis,
            'role' => $request->role
        ]);

        return redirect('user');
    }
}
