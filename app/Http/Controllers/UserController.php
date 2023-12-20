<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function storeInfo(Request $request)
    {
        $infoInsert = User::insert([
            'name'=>$request->input('FullName'),
            'address'=>$request->input('Address'),
            'email'=>$request->input('Email'),
            'phone'=>$request->input('PhoneNumber'),
            'password'=>$request->input('Password')
        ]);

        if($infoInsert){
            return redirect()->back()->with('success','Registration Successfull!!!');
        }
    }

    public function Login(Request $request)
    {
        $user = User::where('email',$request->input('Email'))
            ->where('password',$request->input('Password'))
            ->first();

        if ($user)
            return redirect()->route('profile',['id'=>$user->id]);
    }

    public function profiles($id)
    {
        $user = User::find($id);

        return view('profile', ['id'=>$user]);
    }

}
