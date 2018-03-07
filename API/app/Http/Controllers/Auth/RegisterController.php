<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Vendor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  Request $request
     * @return \App\User
     */
    protected function registerAdminWithNewVenue(Request $request)
    {
        $userData = $request->validate([
            'name' => 'required|string|alpha|max:128',
            'email' => 'required|string|email|max:128|unique:users',
            'password' => 'required|string|between:6,128|confirmed',
        ]);

        $vendorData = $request->validate([
            'title' => 'required|string|max:128',
            'subdomain' => 'required|string|max:32|alpha_num|unique:vendors',
            'type' => 'required|string|max:32|confirmed',
            'phone' => 'required|string|between:9,14|confirmed',
        ]);

        $vendor = Vendor::create([
            'title' => $vendorData['title'],
            'subdomain' => $vendorData['subdomain'],
            'type' => $vendorData['type'],
            'phone' => $vendorData['phone']
        ]);

        $user = User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => bcrypt($userData['password']),
            'vendor_id' => $vendor->id,
            'user_role_id' => 1
        ]);

        return view('admin.config')->with('json', [
            'siteName' => $vendor->title,
            'apiUrl' => env('APP_URL'),
            'clientSecret' => 'ifUXlMBm1kZYy2rwgiXBhV2UywPEp5ck2w2ndP2N',
            'subdomain' => $vendor->subdomain,
            'page' => 'Home',
            'accessToken' => $user->createToken($user->email)->accessToken
        ]);
    }
}
