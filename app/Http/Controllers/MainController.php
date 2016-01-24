<?php

namespace App\Http\Controllers;


class MainController extends Controller
{
    public function index()
    {
        $apiUri = 'https://api.octinn.com/store/strategy/last';

        $apiFetcher = \App::make('oi.api');
        $data = $apiFetcher('GET', $apiUri);

        return view('main', ['data' => $data]);
    }

    public function showJoin()
    {
        $apiUri = 'https://api.octinn.com/octinn/jobs';

        $apiFetcher = \App::make('oi.api');
        $data = $apiFetcher('GET', $apiUri);

        return view('join', ['data' => $data]);
    }

    public function showAbout()
    {
        return view('about');
    }
}