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
        $vendorData = $request->validate([
            'title' => 'required|string|max:128',
            'subdomain' => 'required|string|max:32|alpha_num|unique:vendors',
            'type' => 'required|string|max:32',
            'phone' => 'required|string|between:9,14',
        ]);

        $userData = $request->validate([
            'name' => 'required|string|alpha|max:128',
            'email' => 'required|string|email|max:128|unique:users',
            'password' => 'required|string|between:6,128|confirmed',
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
            'role_id' => 1
        ]);

        $token = $user->createToken($user->email);

//        return redirect()->action(
//            'UserController@profile', ['id' => 1]
//        );

        return redirect()->route('administration', ['subdomain' => $vendor->subdomain])->with('json', [
            'siteName' => $vendor->title,
            'apiUrl' => env('APP_URL'),
            'clientSecret' => env('X_ADMIN_CLIENT_SECRET'),
            'subdomain' => $vendor->subdomain,
            'page' => 'Home',
            'accessToken' => $token->accessToken,
            'expiresIn' => now()->diffInSeconds(now()->addMinutes(10))
        ]);
    }
}
