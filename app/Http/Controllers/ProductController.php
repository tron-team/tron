<?php

namespace App\Http\Controllers;


class ProductController extends Controller
{
    public function show($id)
    {
        $apiUri = sprintf("https://api.octinn.com/store/product/%s/detail", $id);

        $apiFetcher = \App::make('oi.api');
        $data = $apiFetcher('GET', $apiUri);

        return view('product', ['data' => $data]);
    }
}