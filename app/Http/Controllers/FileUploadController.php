<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function example1(Request $request)
    {
        return $request->file('file')->store('docs');
    }
}
