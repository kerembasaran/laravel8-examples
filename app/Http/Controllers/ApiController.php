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

    public function databaseSavePostMethodApiExample1(Request $request)
    {
        $device = new Device();
        $device->name = $request->name;
        $result = $device->save();

        if ($result) {
            return ['Result' => 'Data has been saved'];
        } else {
            return ['Result' => 'Operation failed'];
        }
    }

    public function databaseUpdatePutMethodApiExample1(Request $request)
    {
        $device = Device::find($request->id);
        $device->name = $request->name;
        $result = $device->save();

        if ($result) {
            return ['Result' => 'Data has been update'];
        } else {
            return ['Result' => 'update operation has been failed'];
        }
    }

    public function databaseDeleteApiExample1($id)
    {
        $device = Device::find($id);
        $result = $device->delete();

        if ($result) {
            return ['Result' => 'record has been delete'];
        } else {
            return ['Result' => 'delete operation is failed'];
        }
    }

    public function searchApiExample1($name)
    {
        return Device::where('name', 'like', '%' . $name . '%')->get();
    }
}
