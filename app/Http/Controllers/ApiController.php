<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class ApiController extends Controller
{
    public function makeFirstSimplestApi()
    {
        return [
            'name' => 'kerem',
            'email' => 'kerem@kerem.com'
        ];
    }

    public function getDataApiExample1()
    {
        return Device::all();
    }
}
