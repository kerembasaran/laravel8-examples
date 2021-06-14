@extends('layouts.app')

@section('title')
    Form Validation
@endsection
@section('css')

@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            Form Validation - Examples 1
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('form-validation.example1') }}">
                @csrf
                <div class="form-group row">
                    <label for="firs_name" class="col-sm-2 col-form-label">Firs Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="firs_name" name="firs_name" value="{{ old('firs_name') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_name" class="col-sm-2 col-form-label">User Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_name" name="user_name" value="{{ old('user_name') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
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
