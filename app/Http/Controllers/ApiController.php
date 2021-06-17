<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function makeFirstSimplestApi()
    {
        return [
            'name' => 'kerem',
            'email' => 'kerem@kerem.com'
        ];
    }
}
