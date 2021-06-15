@extends('layouts.app')

@section('title')
    Posts
@endsection
@section('css')

@endsection
@section('content')
    @if(Session::has('post_deleted'))
        <div class="alert alert-danger">
            {{ Session::get('post_deleted') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left">
                    All Posts
                </div>
                <div class="col-6 text-right">
                    <a href="{{ route('database-query-builder-save.post') }}" class="btn btn-primary">Add Post</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>
                            <a href="{{ route('database-query-builder-detail.post',$post->id) }}" class="btn btn-success">Detail</a>
                            <a href="{{ route('database-query-builder-delete.post',$post->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('js')

@endsection
