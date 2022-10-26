@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @auth
                        <p>Welcome <b>{{ Auth::user()->name }}</b></p>
                        <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
                    @endauth
                    @guest
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-info" href="{{ route('register') }}">Register</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
