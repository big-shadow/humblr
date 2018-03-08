<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    public function adminSite(Request $request, $subdomain, $page = null)
    {
        return view('admin.config')->with('json', [
            'siteName' => 'Demo Farm',
            'apiUrl' => env('APP_URL'),
            'clientSecret' => env('X_ADMIN_CLIENT_SECRET'),
            'subdomain' => $subdomain,
            'page' => $page ?? 'dashboard',
            'accessToken' => $request->session()->pull('accessToken'),
            'expiresIn' => env('X_SESSION_TIMEOUT')
        ]);
    }

    /**
     * GET the entire User website DOM.
     *
     * Current URL.
     */
    public function userSite($subdomain, $page = null)
    {
        return view('ui.config')->with('json', [
            'siteName' => 'Demo Farm',
            'apiUrl' => env('APP_URL'),
            'clientSecret' => env('X_USER_CLIENT_SECRET'),
            'subdomain' => $subdomain,
            'page' => $page ?? 'home'
        ]);
    }
}