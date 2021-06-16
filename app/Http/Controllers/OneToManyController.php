<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class OneToManyController extends Controller
{
    public function addPost()
    {
        $post = new Post();
        $post->title = 'Eloquent Relationship One to Many First Post Title';
        $post->body = 'Eloquent Relationship One to Many First Post Description';
        $post->save();
        return 'Post has been created successfully!';
    }

    public function addComment($id)
    {
        $post = Post::find($id);
        $comment = new Comment();
        $comment->comment = 'This is first comment.';
        $post->comments()->save($comment);
        return 'Comment has been posted';
    }

    public function getCommentByPost($id)
    {
        return Post::find($id)->comments;
    }
}
