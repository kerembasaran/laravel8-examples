@extends('layouts.app')

@section('title')
    File Upload
@endsection
@section('css')

@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            File Upload
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('file-upload.example1') }}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file">
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
