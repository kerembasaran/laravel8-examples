<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashSessionController extends Controller
{
    public function example1(Request $request)
    {
        $data = $request->input('firs_name') . ' ' . $request->input('last_name');
        $request->session()->flash('user', $data);
        return redirect()->route('flash-session.example1');
    }

}
