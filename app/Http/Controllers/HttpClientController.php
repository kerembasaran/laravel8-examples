<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpClientController extends Controller
{
    public function getAllPost()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function getPostById($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $post->json();
    }

    public function addPost()
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => 'New Post Title',
            'body' => 'New post body'
        ]);
        return $post->json();
    }

    public function updatePost()
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => 'Update Title',
            'body' => 'Update body'
        ]);
        return $response->json();
    }

    public function deletePost($id)
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $response->json();
    }

    public function example1()
    {
        $response = Http::get('https://reqres.in/api/users?page=1');
        return view('http-client.example1', ['response' => $response]);
    }
}
