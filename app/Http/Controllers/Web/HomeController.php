<?php

/**
 * Copyright (c) 2022 Biliap LLC and/or its affiliates. All rights reserved.
 */

namespace App\Http\Controllers\Web;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
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
    
                if ($sessionLocale === 'en') {
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
    
                if ($appLocale === 'en') {
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
    
                if ($sessionLocale === 'en') {
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
    
                if ($appLocale === 'en') {
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
    public function teamMember($member_id)
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
            $json_result1 = json_decode($response->getBody(), false);
            $json_result2 = json_decode($response->getBody(), false);

            if (Session::has('locale')) {
                $sessionLocale = Session::get('locale');

                if ($sessionLocale === 'en') {
                    foreach ($json_result1->en as $team):
                        if ($team->id === (int) $member_id) {
                            return view('inner_page.team', [
                                'member' => $team,
                                'team' => $json_result2->en
                            ]);
                        }
                    endforeach;

                } else {
                    foreach ($json_result1->fr as $team):
                        if ($team->id === (int) $member_id) {
                            return view('inner_page.team', [
                                'member' => $team,
                                'team' => $json_result2->fr
                            ]);
                        }
                    endforeach;
                }

            } else {
                $appLocale = app()->getLocale();

                if ($appLocale === 'en') {
                    foreach ($json_result1->en as $team):
                        if ($team->id === (int) $member_id) {
                            return view('inner_page.team', [
                                'member' => $team,
                                'team' => $json_result2->en
                            ]);
                        }
                    endforeach;

                } else {
                    foreach ($json_result1->fr as $team):
                        // dd($team);
                        if ($team->id === (int) $member_id) {
                            return view('inner_page.team', [
                                'member' => $team,
                                'team' => $json_result2->fr
                            ]);
                        }
                    endforeach;
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

    /**
     * @return \Illuminate\Support\Facades\Redirect
     */
    public function download()
    {
        return Redirect::to(asset('assets/docs/brochure.pdf'));
    }
}
