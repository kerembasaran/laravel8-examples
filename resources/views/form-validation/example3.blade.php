@extends('layouts.app')

@section('title')
    Form Validation
@endsection
@section('css')

@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            Form Validation - Examples 3
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('form-validation.example1') }}">
                @csrf
                <div class="form-group row">
                    <label for="firs_name" class="col-sm-2 col-form-label">Firs Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('firs_name') is-invalid @enderror @if(old('firs_name')) is-valid @endif" id="firs_name" name="firs_name" value="{{ old('firs_name') }}">
                        <div class="invalid-feedback">
                            @error('firs_name')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror  @if(old('last_name')) is-valid @endif" id="last_name" name="last_name" value="{{ old('last_name') }}">
                        <div class="invalid-feedback">
                            @error('last_name')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_name" class="col-sm-2 col-form-label">User Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('user_name') is-invalid @enderror @if(old('user_name')) is-valid @endif" id="user_name" name="user_name" value="{{ old('user_name') }}">
                        <div class="invalid-feedback">
                            @error('user_name')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('email') is-invalid @enderror @if(old('email')) is-valid @endif" id="email" name="email" value="{{ old('email') }}">
                        <div class="invalid-feedback">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
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
