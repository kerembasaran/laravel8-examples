@extends('layouts.app')

@section('title')
    Localization
@endsection
@section('css')

@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            Localization
        </div>
        <div class="card-body">
            <a href="{{ route('localization.example1') }}">Default</a>
            <a href="{{ route('localization.example1','tr') }}">TR</a>
            <a href="{{ route('localization.example1','en') }}">EN</a>
            <a href="{{ route('localization.example1','ko') }}">KO</a>
            <hr>
            {{ __('example1.welcome') }}
            <br>
            {{ __('example1.header') }}
            <br>
            {{ __('example1.content') }}
            <br>
            {{ __('example1.footer') }}
        </div>
    </div>
@endsection
@section('js')

@endsection
