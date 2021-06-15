<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;

class OneToOneController extends Controller
{
    public function insertRecord()
    {
        $phone = new Phone();
        $phone->phone = '1234567890';
        $user = new User();
        $user->name = 'Jenniferq';
        $user->email = 'jenniferq@gmail.com';
        $user->password = encrypt('secret');
        $user->save();
        $user->phone()->save($phone);
        return 'Record has been created successfully!';
    }

    public function fetchPhoneByUser($id)
    {
        return User::find($id)->phone;
    }
}
