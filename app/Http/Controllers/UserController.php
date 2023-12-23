<?php

namespace App\Http\Controllers;

use App\Models\ProductQR;
use App\Models\User;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
    public function storeInfo(Request $request)
    {
        $infoInsert = User::insert([
            'name'=>$request->input('FullName'),
            'email'=>$request->input('Email'),
            'phone'=>$request->input('PhoneNumber'),
            'password'=>$request->input('Password')
        ]);

        if($infoInsert){
            return redirect()->route('home');
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

    public function productqrandbar($id, Request $request)
    {
        $user = User::find($id);

        $product = ProductQR::orderBy('id','desc')->first();

        return view ('productqr',['id'=>$user, 'product'=>$product]);
    }

    public function the($id,$products, Request $request)
    {
        $user = User::find($id);
        $product = ProductQR::find($products);



            $info = "Company Name: {$product->company_name}\n";
            $info .= "Product Name: {$product->product_name}\n";
            $info .= "Batch Number: {$product->batch_number}\n";
            $info .= "Making Date : {$product->making_date}\n";
            $info .= "Expired Date: {$product->expired_date}\n";


            $qrCode = QrCode::format('png')->size(150)->generate($info);

        return view ('theqr',['id'=>$user,'product'=>$product,'qrCode'=>$qrCode]);

    }

    public function productupload(Request $request)
    {
        $user = $request->input('id');
        $products = $request->input('prod');
        $infoProduct = ProductQR::insert([
            'user_id' => $request->input('id'),
            'user_name' => $request->input('username'),
            'company_name' => $request->input('companyName'),
            'product_name' => $request->input('productName'),
            'batch_number' => $request->input('batchNumber'),
            'making_date' => $request->input('makingDate'),
            'expired_date' => $request->input('expiryDate')
        ]);

        if ($infoProduct) {
            return redirect()->route('theqr', ['id' => $user,'product'=>$products])->with('success', 'Your QR Code is ready.');
        }
    }




}
