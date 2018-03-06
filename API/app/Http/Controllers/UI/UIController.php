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
    public function adminSite($subdomain, $page = null)
    {
        return view('admin.config')->with('json', [
            'siteName' => 'Demo Farm',
            'apiUrl' => env('APP_URL'),
            'clientSecret' => 'ifUXlMBm1kZYy2rwgiXBhV2UywPEp5ck2w2ndP2N',
            'subdomain' => $subdomain,
            'page' => $page ?? 'Home'
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
            'clientSecret' => 'ifUXlMBm1kZYy2rwgiXBhV2UywPEp5ck2w2ndP2N',
            'subdomain' => $subdomain,
            'page' => $page ?? 'Home'
        ]);
    }
}