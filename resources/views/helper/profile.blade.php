@extends('layouts.app')

@section('title')
    Helper
@endsection
@section('css')
    <style>
        div a.active {
            background-color: yellow;
        }
    </style>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <a class="{{ is_active('helper/index') }}" href="{{ route('helper.index') }}">Anasayfa</a> |
            <a class="{{ is_active('helper/account') }}" href="{{ route('helper.account') }}">Hesap</a> |
            <a class="{{ is_active('helper/profile') }}" href="{{ route('helper.profile') }}">Profil</a>
        <!--
            <a class="{{ request()->is('helper/index') ? 'active':null }}" href="{{ route('helper.index') }}">Anasayfa</a> |
            <a class="{{ request()->is('helper/account') ? 'active':null }}" href="{{ route('helper.account') }}">Hesap</a> |
            <a class="{{ request()->is('helper/profile') ? 'active':null }}" href="{{ route('helper.profile') }}">Profil</a>
        -->
        </div>
        <div class="card-body">
            Profil
        </div>
    </div>
@endsection
@section('js')

@endsection
