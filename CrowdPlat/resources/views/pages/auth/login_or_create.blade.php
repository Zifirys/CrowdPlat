@extends('layout.main')

@section('title', 'CrowdPlat')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
@endsection

@section('content')

<div class="container">
        <div class="row w-100">
            <div class="col-md-6 box login-box">
                <h2>Login</h2>
                <a href="" class="btn btn-dark">Go</a>
            </div>
            <div class="col-md-6 box register-box">
                <h2>Register</h2>
                <a href="{{ route('register') }}" class="btn btn-dark">Go</a>
            </div>
        </div>
    </div>

@endsection