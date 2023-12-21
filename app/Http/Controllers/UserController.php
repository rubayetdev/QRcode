<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

        if ($user) {
            return redirect()->route('dashboard', ['id' => $user->id]);
        }
        else
            return redirect()->back()->with('error','Please Check Your Credential');
    }

    public function dash($id){
        $user = User::find($id);

        return view('dashboard',['id'=>$user]);
    }

    public function profiles($id)
    {
        $user = User::find($id);

        $userInfo = "Name: {$user->name}\n";
        $userInfo .= "Email: {$user->email}\n";
        $userInfo .= "Phone: {$user->phone}\n";
        $userInfo .= "Address: {$user->address}\n";
        $qrCode = QrCode::size(150)->generate($userInfo);

        return view('profile', ['id'=>$user,'qrCode'=>$qrCode]);
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('editprofile',['id'=>$user]);
    }

    public function updateprofile(Request $request)
    {
        $user = $request->input('id');

        $users = User::where('id',$user)->update([
            'name'=>$request->input('FullName'),
            'email'=>$request->input('Email'),
            'phone'=>$request->input('Phone'),
            'address'=>$request->input('Location'),
        ]);

        if ($users) {
            return redirect()->route('profile', ['id' => $user])->with('success', 'Update Successfull');
        }
    }

}
