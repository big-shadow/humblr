<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Vendor;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Laravel\Passport\Client;
use App\Events\NewVendor;
use Illuminate\Support\Facades\Route;

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
     * @return Request
     */
    protected function registerAdminWithNewVenue(Request $request)
    {
        $vendorData = $request->validate([
            'title' => 'required|string|max:128',
            'subdomain' => 'required|string|max:32|alpha_num|unique:vendors',
            'type' => 'required|string|max:32',
            'phone' => 'required|string|between:9,14|phone',
            'business_email' => 'required|string|email|max:128|unique:vendors,email',
        ]);

        $userData = $request->validate([
            'name' => 'required|string|alpha_space|max:128',
            'email' => 'required|string|email|max:128|unique:users',
            'password' => 'required|string|between:6,128|confirmed',
        ]);

        $vendor = Vendor::create([
            'title' => $vendorData['title'],
            'subdomain' => $vendorData['subdomain'],
            'type' => $vendorData['type'],
            'phone' => $vendorData['phone'],
            'email' => $vendorData['business_email']
        ]);

        $user = User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => bcrypt($userData['password']),
            'vendor_id' => $vendor->id,
            'role_id' => 1
        ]);

        event(new NewVendor($vendor, $user));

        $client = Client::where('password_client', 1)->first();

        $sessionRequest = Request::create('oauth/token', 'POST', [
            'grant_type' => 'password',
            'client_id' => $client->id,
            'client_secret' => $client->secret,
            'username' => $user->email,
            'password' => $userData['password'],
            'scope' => null,
        ]);

        $sessionResponse = Route::dispatch($sessionRequest);

        return redirect()->action(
            'UI\UIController@adminSite', [
                'vendor' => $vendor->subdomain,
                'page' => 'welcome'
            ]
        )->with('session', $sessionResponse);
    }

    /**
     * Add someone to the marketing list.
     *
     * @param  Request $request
     * @return Request
     */
    protected function registerNewsletterReceipent(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|alpha_space|max:128',
            'email' => 'required|string|email|max:128',
        ]);

        $this->dispatchFrom('App\Jobs\AddUserToMailingList', $request, [
            'list' => env('MAILGUN_NEWSLETTER_ALIAS')
        ]);

        $this->dispatchFrom('App\Jobs\SendEmail', $request, [
            'template' => 'emails.welcome',
            'subject' => 'Welcome to ' . env('APP_NAME') . '.',
            'data' => $data
        ]);

        return back()->with('success', $data['email'] . ' was subscribed.');
    }
}
