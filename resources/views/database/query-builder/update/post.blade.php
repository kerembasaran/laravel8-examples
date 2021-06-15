@extends('layouts.app')

@section('title')
    Edit Post
@endsection
@section('css')

@endsection
@section('content')
    @if(Session::has('post_updated'))
        <div class="alert alert-danger">
            {{ Session::get('post_updated') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left">
                    Edit Post
                </div>
                <div class="col-6 text-right">
                    <a href="{{ route('database-query-builder-list.posts') }}" class="btn btn-primary">All Posts</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('database-query-builder-update.post-from-submit') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $post->id }}">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Post Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Post Title" value="{{ $post->title }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="body" class="col-sm-2 col-form-label">Post Description</label>
                    <div class="col-sm-10">
                        <textarea name="body" class="form-control" id="body" cols="30" rows="3">{{ $post->body }}</textarea>
                    </div>
                </div>
                <input type="submit" value="Update" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
@section('js')

@endsection
