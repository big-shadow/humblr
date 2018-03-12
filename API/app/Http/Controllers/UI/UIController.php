<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vendor;
use Laravel\Passport\Client;

/**
 * @resource UIController
 *
 * Where subdomain websites are served with configurations.
 */
class UIController extends Controller
{
    /**
     * GET the entire Admin website DOM.
     *
     * Current URL.
     */
    public function adminSite(Request $request, Vendor $vendor, $page = null)
    {
        $client = Client::where('password_client', 1)->first();

        $json = [
            'app_name' => env('APP_NAME'),
            'api_url' => env('APP_URL'),
            'client_id' => $client->id,
            'client_secret' => $client->secret,
            'page' => $page ?? 'dashboard',
            'vendor' => $vendor->toJson()
        ];

        if ($request->session()->has('session')) {
            $json = array_merge($json, [
                'session' => $request->session()->pull('session')
            ]);
        }

        return view('admin.config')->with('json', $json);
    }

    /**
     * GET the entire User website DOM.
     *
     * Current URL.
     */
    public function userSite(Vendor $vendor, $page = null)
    {
        $client = Client::where('password_client', 1)->first();

        return view('ui.config')->with('json', [
            'app_name' => env('APP_NAME'),
            'api_url' => env('APP_URL'),
            'client_id' => $client->id,
            'client_secret' => $client->secret,
            'subdomain' => $vendor->subdomain,
            'page' => $page ?? 'dashboard',
        ]);
    }
}