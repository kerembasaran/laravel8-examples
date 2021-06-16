@extends('layouts.app')

@section('title')
    Flash Session
@endsection
@section('css')

@endsection
@section('content')
    @if (session('user'))
        <div class="alert alert-success">
            {{ session('user') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            Flash Session - Examples 1
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('flash-session.example1') }}">
                @csrf
                <div class="form-group row">
                    <label for="firs_name" class="col-sm-2 col-form-label">Firs Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="firs_name" name="firs_name" placeholder="Enter Firs Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name">
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
