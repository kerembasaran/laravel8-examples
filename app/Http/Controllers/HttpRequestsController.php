<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpRequestsController extends Controller
{
    public function example1(Request $request)
    {
        $method = $request->method();
        $path = $request->path();
        $url = $request->url();
        $fullUrl = $request->fullUrl();
        return $method . '<br>' . $path . '<br>' . $url . '<br>' . $fullUrl;
    }
}
