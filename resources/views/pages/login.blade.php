@extends('layouts.app')

@section('page_title', ' - Login')

@section('content')
    <form class="form-signin" method="post" action="{{ route('login.post') }}">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        <label for="email" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" value="{{ old('email') }}">
        @if ($errors->has('email'))
            <small class="text-danger">
                {{ $errors->first('email') }}
            </small>
        @endif
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        @if ($errors->has('password'))
            <small class="text-danger">
                {{ $errors->first('password') }}
            </small>
        @endif
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember_me"> Remember me
            </label>
        </div>
        <a href="{{ route('register') }}">Register</a>
        <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Login</button>
    </form>
@endsection
