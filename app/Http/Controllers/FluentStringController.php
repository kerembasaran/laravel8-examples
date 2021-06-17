<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentStringController extends Controller
{
    public function example1()
    {
        $slice = Str::of('Welcome to my Youtube Channel')->after('Welcome to');
        echo $slice . '<br>';

        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice2 . '<br>';

        $string = Str::of('Hello')->append('World!');
        echo $string . '<br>';

        $result = Str::of('LARAVEL 8')->lower();
        echo $result . '<br>';

        $replaced = Str::of('Laravel 7.0')->replace('7.0', '8.0');
        echo $replaced . '<br>';

        $converted = Str::of('this is a title')->title();
        echo $converted . '<br>';

        $slug = Str::of('Laravel 8 Framework')->slug('-');
        echo $slug . '<br>';

        $str = Str::of('Laravel Framework')->substr(8, 5);
        echo $str . '<br>';

        $str2 = Str::of('/Laravel8/')->trim('/');
        echo $str2 . '<br>';

        $str3 = Str::of('laravel 8')->upper();
        echo $str3;
    }

    public function example2()
    {
        $data = "hi,let's learn laravel";
        echo $data . '<br>';

        $data = Str::ucfirst($data);
        echo $data . '<br>';

        $data = Str::replaceFirst('Hi', 'Hello', $data);
        echo $data . '<br>';

        $data = Str::camel($data);
        echo $data . '<br>';

        $data = "hi,let's learn laravel";

        $data = Str::of($data)
            ->ucfirst($data)
            ->replaceFirst('Hi', 'Hello', $data)
            ->camel($data);
        echo $data . '<br>';
    }
}
