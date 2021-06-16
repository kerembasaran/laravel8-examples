@extends('layouts.app')

@section('title')
    Http Client
@endsection
@section('css')

@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            Http Client - Examples 1
        </div>
        <div class="card-body">
            <b>Ham Veri</b>
            <br>
            {{ $response }}
            <hr>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Profile Photo</th>
                </tr>
                </thead>
                <tbody>
                @foreach($response['data'] as $item)
                    <tr>
                        <th scope="row">{{ $item['id'] }}</th>
                        <td>{{ $item['first_name'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td><img src="{{ $item['avatar']}} "></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('js')

@endsection
