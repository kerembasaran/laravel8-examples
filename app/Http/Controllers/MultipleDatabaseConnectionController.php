<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MultipleUser;
use Illuminate\Support\Facades\DB;

class MultipleDatabaseConnectionController extends Controller
{
    public function index()
    {
        return MultipleUser::all();
        //return DB::connection('mysql2')->table('users')->get();
    }
}
