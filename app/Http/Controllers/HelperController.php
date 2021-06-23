<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function index()
    {
        return view('helper.index');
    }

    public function account()
    {
        return view('helper.account');
    }

    public function profile()
    {
        return view('helper.profile');
    }

}
