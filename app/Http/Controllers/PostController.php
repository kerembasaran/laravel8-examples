<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function getAllPost()
    {
        $posts = DB::table('posts')->get();
        return view('database.query-builder.list.posts', compact('posts'));
    }

    public function addPostSubmit(Request $request)
    {
        DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_created', 'Post has been created successfully!');
    }

    public function getPostById($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('database.query-builder.detail.post', compact('post'));
    }

    public function deletePost($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return back()->with('post_deleted', 'Post has been deleted successfully!');
    }

    public function editPost($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('database.query-builder.update.post', compact('post'));
    }

    public function updatePost(Request $request)
    {
        DB::table('posts')->where('id', $request->id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_updated', 'Post has been updated successfully!');
    }

    public function getAllPostsUsingModel()
    {
        $posts = Post::all();
        return $posts;
    }

    public function getAllPostEloquent()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('database.eloquent.list.posts', compact('posts'));
    }

    public function addPostSubmitEloquent(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_created', 'Post has been created successfully!');
    }

    public function getPostByIdEloquent($id)
    {
        $post = Post::where('id', $id)->first();
        return view('database.eloquent.detail.post', compact('post'));
    }

    public function deletePostEloquent($id)
    {
        Post::where('id', $id)->delete();
        return back()->with('post_deleted', 'Post has been deleted successfully!');
    }

    public function editPostEloquent($id)
    {
        $post = Post::find($id);
        return view('database.eloquent.update.post', compact('post'));
    }

    public function updatePostEloquent(Request $request)
    {
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_updated', 'Post has been updated successfully!');
    }
}
