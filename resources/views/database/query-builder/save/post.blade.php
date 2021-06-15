@extends('layouts.app')

@section('title')
    Add Post
@endsection
@section('css')

@endsection
@section('content')
    @if(Session::has('post_created'))
        <div class="alert alert-danger mb-3">
            {{ Session::get('post_created') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left">
                    Add Post
                </div>
                <div class="col-6 text-right">
                    <a href="{{ route('database-query-builder-list.posts') }}" class="btn btn-primary">All Posts</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('database-query-builder-save.post') }}">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Post Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Post Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="body" class="col-sm-2 col-form-label">Post Description</label>
                    <div class="col-sm-10">
                        <textarea name="body" class="form-control" id="body" cols="30" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')

@endsection
