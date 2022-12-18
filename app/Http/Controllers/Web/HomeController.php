<?php
/**
 * Copyright (c) 2022 Biliap LLC and/or its affiliates. All rights reserved.
 */

namespace App\Http\Controllers\Web;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->except(['changeLanguage']);
    }

    // ==================================== HTTP GET METHODS ====================================
    /**
     * GET: Change language
     *
     * @param  $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeLanguage($locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('inner_page.about');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function service()
    {
        return view('inner_page.service');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function realization()
    {
        return view('inner_page.realization');
    }
}
