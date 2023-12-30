<?php

namespace App\Http\Controllers;

use App\Models\ContactQR;
use App\Models\EmailQR;
use App\Models\LocationQR;
use App\Models\ProductQR;
use App\Models\SMSQR;
use App\Models\URLQR;
use App\Models\User;
use App\Models\WIFIQR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
    public function storeInfo(Request $request)
    {
        $password = $request->input('Password');
        $encrypt = Hash::make($password);

        $infoInsert = User::insert([
            'name'=>$request->input('FullName'),
            'email'=>$request->input('Email'),
            'phone'=>$request->input('PhoneNumber'),
            'password'=>$encrypt
        ]);

        if($infoInsert){
            return redirect()->route('home');
        }
    }

    public function showResetForm(Request $request, $token)
    {
        $email = $request->email;
        return view('reset')->with(
            ['token' => $token, 'email' => $email]
        );
    }

    public function Login(Request $request)
    {
        $remember = $request->input('remember');
        $credential = $request->only('email','password');
        if (Auth::attempt($credential))
        {
            if(isset($remember) && !empty($remember)){
                $expiration_time = time() + (15 * 24 * 3600); // 15 days in seconds
                setcookie('email', $credential['email'], $expiration_time);
                setcookie('password', $credential['password'], $expiration_time);
            }

            else{
                setcookie('email','');
                setcookie('password','');
            }
            $user = Auth::user();
            return redirect()->route('dashboard', ['id' => $user->id]);
        }
        else
            return redirect()->back()->with('error', 'Invalid credentials');


//        $user = User::where('email',$request->input('Email'))
//            ->where('password',$request->input('Password'))
//            ->first();
//
//        if ($user) {
//            return redirect()->route('dashboard', ['id' => $user->id]);
//        }
//        else
//            return redirect()->back()->with('error','Please Check Your Credential');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }

    public function dash($id){
        $user = User::find($id);
        if ($user) {
            return view('dashboard', ['id' => $user]);
        } else {
            return redirect()->back()->with('error', 'User not found');
        }
    }

    public function profiles($id)
    {
        $user = User::find($id);

        $userInfo = "Name: {$user->name}\n";
        $userInfo .= "Email: {$user->email}\n";
        $userInfo .= "Phone: {$user->phone}\n";
        $qrCode = QrCode::format('png')->size(150)->generate($userInfo);

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

    public function email($id)
    {
        $user = User::find($id);

        $product = EmailQR::orderBy('id','desc')->first();

        return view('emailqr',['id'=>$user,'product'=>$product]);
    }

    public function emailupload(Request $request)
    {
        $user = $request->input('id');
        $products = $request->input('prod');
        $infoEmail = EmailQR::insert([
            'user_id'=>$user,
            'user_name'=>$request->input('username'),
            'userfrom'=>$request->input('fromName'),
            'userto'=>$request->input('toName'),
            'message'=>$request->input('message')
        ]);
        if ($infoEmail){
            return redirect()->route('theqr2',['id'=>$user,'product'=>$products])->with('success', 'Your QR Code is ready.');
        }
    }

    public function the2($id,$products, Request $request)
    {
        $user = User::find($id);
        $product = EmailQR::find($products);

        $info = "From: {$product->userfrom}\n";
        $info .= "To: {$product->userto}\n";
        $info .= "Message: {$product->message}\n";

        $qrCode = QrCode::format('png')->size(200)->generate($info);

        return view ('theqr2',['id'=>$user,'product'=>$product,'qrCode'=>$qrCode]);

    }

    public function historypage($id)
    {
        $user = User::find($id);

        $users = ProductQR::where('user_id',$user->id)->get();
        $emailuser = EmailQR::where('user_id',$user->id)->get();
        $location = LocationQR::where('user_id',$user->id)->get();
        $url = URLQR::where('user_id',$user->id)->get();
        $sms = SMSQR::where('user_id',$user->id)->get();
        $wifi = WIFIQR::where('user_id',$user->id)->get();
        $contact = ContactQR::where('user_id',$user->id)->get();

        return view ('history',[
            'id'=>$user,
            'users'=>$users,
            'emailuser'=>$emailuser,
            'location'=>$location,
            'url'=>$url,
            'sms'=>$sms,
            'wifi'=>$wifi,
            'contact'=>$contact
        ]);
    }

    public function smsupload(Request $request)
    {
        $user = $request->input('id');
        $products = $request->input('prod');
        $infoEmail = SMSQR::insert([
            'user_id'=>$user,
            'user_name'=>$request->input('username'),
            'userfrom'=>$request->input('fromName'),
            'userto'=>$request->input('toName'),
            'smsmessage'=>$request->input('message')
        ]);
        if ($infoEmail){
            return redirect()->route('theqr3',['id'=>$user,'product'=>$products])->with('success', 'Your QR Code is ready.');
        }
    }

    public function the3($id,$product,Request $request)
    {
        $user = User::find($id);
        $products = SMSQR::find($product);

        $info = "From: {$products->userfrom}\n";
        $info .= "To: {$products->userto}\n";
        $info .= "Message: {$products->smsmessage}\n";

        $qrCode = QrCode::format('png')->size(200)->generate($info);

        return view ('theqr3',['id'=>$user,'product'=>$products,'qrCode'=>$qrCode]);
    }

    public function sms($id)
    {
        $user = User::find($id);

        $products = SMSQR::orderBy('id','desc')->first();

        return view('smsqr',['id'=>$user,'product'=>$products]);
    }

    public function wifi($id){
        $user = User::find($id);
        $products = WIFIQR::orderBy('id','desc')->first();
        return view('wifiqr',['id'=>$user, 'product'=>$products]);
    }

    public function wifiupload(Request $request)
    {
        $user = $request->input('id');
        $products = $request->input('prod');
        $infoEmail = WIFIQR::insert([
            'user_id'=>$user,
            'user_name'=>$request->input('username'),
            'networktype'=>$request->input('fromName'),
            'network_name'=>$request->input('toName'),
            'password'=>$request->input('message'),
            'passwordtype'=>$request->input('passwordtype')
        ]);
        if ($infoEmail){
            return redirect()->route('theqr4',['id'=>$user,'product'=>$products])->with('success', 'Your QR Code is ready.');
        }
    }

    public function the4($id, Request $request, $product)
    {
        $user = User::find($id);
        $products = WIFIQR::find($product);

        $info = "Network Name: {$products->network_name}\n";
        $info .= "Network Type: {$products->networktype}\n";
        $info .= "Password: {$products->password}\n";
        $info .= "Password Type: {$products->passwordtype}\n";

        $qrCode = QrCode::format('png')->size(200)->generate($info);

        return view ('theqr4',['id'=>$user,'product'=>$products,'qrCode'=>$qrCode]);
    }

    public function location($id)
    {
        $user = User::find($id);
        $products = LocationQR::orderBy('id','desc')->first();
        return view('locationqr',['id'=>$user, 'product'=>$products]);
    }

    public function locationupload(Request $request)
    {
        $user = $request->input('id');
        $products = $request->input('prod');
        $infoEmail = LocationQR::insert([
            'user_id'=>$user,
            'user_name'=>$request->input('username'),
            'location'=>$request->input('fromName'),
            'destination'=>$request->input('toName'),
            'address'=>$request->input('message'),
        ]);
        if ($infoEmail){
            return redirect()->route('theqr5',['id'=>$user,'product'=>$products])->with('success', 'Your QR Code is ready.');
        }
    }

    public function the5($id, Request $request, $product)
    {
        $user = User::find($id);
        $products = LocationQR::find($product);

        $info = "Location: {$products->location}\n";
        $info .= "Destination: {$products->destination}\n";
        $info .= "Address: {$products->address}\n";


        $qrCode = QrCode::format('png')->size(200)->generate($info);

        return view ('theqr5',['id'=>$user,'product'=>$products,'qrCode'=>$qrCode]);
    }

    public function url($id)
    {
        $user = User::find($id);
        $products = URLQR::orderBy('id','desc')->first();
        return view('urlqr',['id'=>$user, 'product'=>$products]);
    }

    public function urlupload(Request $request)
    {
        $user = $request->input('id');
        $products = $request->input('prod');
        $infoEmail = URLQR::insert([
            'user_id'=>$user,
            'user_name'=>$request->input('username'),
            'websitename'=>$request->input('fromName'),
            'link'=>$request->input('toName')
        ]);
        if ($infoEmail){
            return redirect()->route('theqr6',['id'=>$user,'product'=>$products])->with('success', 'Your QR Code is ready.');
        }
    }

    public function the6($id, Request $request, $product)
    {
        $user = User::find($id);
        $products = URLQR::find($product);

        $info = "Website Name: {$products->websitename}\n";
        $info .= "Link: {$products->link}\n";


        $qrCode = QrCode::format('png')->size(200)->generate($info);

        return view ('theqr6',['id'=>$user,'product'=>$products,'qrCode'=>$qrCode]);
    }

    public function contact($id)
    {
        $user = User::find($id);
        $products = ContactQR::orderBy('id','desc')->first();
        return view('contactqr',['id'=>$user, 'product'=>$products]);
    }

    public function contactupload(Request $request)
    {
        $userid = $request->input('id');
        $products = $request->input('prod');
        $username = $request->input('username');
        $first = $request->input('firstname');
        $name = $request->input('name');
        $organ = $request->input('organization');
        $title = $request->input('title');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $mobile = $request->input('mobilephone');
        $fax = $request->input('fax');
        $street = $request->input('street');
        $city = $request->input('city');
        $region = $request->input('region');
        $post = $request->input('post');
        $country = $request->input('country');
        $link = $request->input('link');

        $insert = ContactQR::insert([
            'user_id'=>$userid,
            'user_name'=>$username,
            'firstname'=>$first,
            'name'=>$name,
            'organization'=>$organ,
            'title'=>$title,
            'email'=>$email,
            'phone'=>$phone,
            'mobileph'=>$mobile,
            'fax'=>$fax,
            'street'=>$street,
            'city'=>$city,
            'region'=>$region,
            'postcode'=>$post,
            'country'=>$country,
            'url'=>$link
        ]);

        if ($insert)
        {
            return redirect()->route('theqr7',['id'=>$userid,'product'=>$products])->with('success', 'Your QR Code is ready.');
        }
    }
    public function the7($id, Request $request, $product)
    {
        $user = User::find($id);
        $products = ContactQR::find($product);

        $info = "First Name: {$products->firstname}\n";
        $info .= "Name: {$products->name}\n";
        $info .= "Organization: {$products->organization}\n";
        $info .= "Title: {$products->title}\n";
        $info .= "Email: {$products->email}\n";
        $info .= "Telephone: {$products->phone}\n";
        $info .= "Mobile Phone: {$products->mobileph}\n";
        $info .= "Fax: {$products->fax}\n";
        $info .= "Street: {$products->street}\n";
        $info .= "City: {$products->city}\n";
        $info .= "Region: {$products->region}\n";
        $info .= "Postcode: {$products->postcode}\n";
        $info .= "Country: {$products->country}\n";
        $info .= "Link: {$products->url}\n";


        $qrCode = QrCode::format('png')->size(200)->generate($info);

        return view ('theqr7',['id'=>$user,'product'=>$products,'qrCode'=>$qrCode]);
    }
}
