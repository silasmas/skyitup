<?php

/**
 * Copyright (c) 2022 Biliap LLC and/or its affiliates. All rights reserved.
 */

namespace App\Http\Controllers\Web;

use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
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
        $json_url = asset('/assets/js/team.json');
        $client = new Client();

        try {
            $response = $client->request('GET', $json_url, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
                'verify'  => false
            ]);
            $json_result = json_decode($response->getBody(), false);

            if (Session::has('locale')) {
                $sessionLocale = Session::get('locale');
    
                if ($sessionLocale !== 'en') {
                    return view('welcome', [
                        'json_result' => $json_result->en
                    ]);

                } else {
                    return view('welcome', [
                        'json_result' => $json_result->fr
                    ]);
                }

            } else {
                $appLocale = app()->getLocale();
    
                if ($appLocale !== 'en') {
                    return view('welcome', [
                        'json_result' => $json_result->en
                    ]);

                } else {
                    return view('welcome', [
                        'json_result' => $json_result->fr
                    ]);
                }
            }

        } catch (ClientException $ex) {
            return response()->json($ex, 404);
        }
    }

    /**
     * @return \Illuminate\View\View
     */
    public function about()
    {
        $json_url = asset('/assets/js/team.json');
        $client = new Client();

        try {
            $response = $client->request('GET', $json_url, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
                'verify'  => false
            ]);
            $json_result = json_decode($response->getBody(), false);

            if (Session::has('locale')) {
                $sessionLocale = Session::get('locale');
    
                if ($sessionLocale !== 'en') {
                    return view('inner_page.about', [
                        'json_result' => $json_result->en
                    ]);

                } else {
                    return view('inner_page.about', [
                        'json_result' => $json_result->fr
                    ]);
                }

            } else {
                $appLocale = app()->getLocale();
    
                if ($appLocale !== 'en') {
                    return view('inner_page.about', [
                        'json_result' => $json_result->en
                    ]);

                } else {
                    return view('inner_page.about', [
                        'json_result' => $json_result->fr
                    ]);
                }
            }

        } catch (ClientException $ex) {
            return response()->json($ex, 404);
        }
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
