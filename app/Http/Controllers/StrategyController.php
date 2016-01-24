<?php

namespace App\Http\Controllers;

class StrategyController extends Controller
{
    public function index()
    {
        $apiUri = 'https://api.octinn.com/store/strategy/last';

        $apiFetcher = \App::make('oi.api');
        $data = $apiFetcher('GET', $apiUri);

        return view('strategies', ['data' => $data]);
    }

    public function show($id)
    {
        $apiUri = sprintf("https://api.octinn.com/store/strategy/%s", $id);

        $apiFetcher = \App::make('oi.api');
        $data = $apiFetcher('GET', $apiUri);

        return view('strategy', ['data' => $data]);
    }
}