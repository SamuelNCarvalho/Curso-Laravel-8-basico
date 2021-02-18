@extends('layouts.app')

@section('page_title', ' - Register')

@section('content')
    <form class="form-signin" method="post" action="{{ route('register.post') }}">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
        <label for="name" class="sr-only">Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
        @if ($errors->has('name'))
            <small class="text-danger">
                {{ $errors->first('name') }}
            </small>
        @endif
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
        <label for="password_confirmation" class="sr-only">Password Confirmation</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
        <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>
    </form>
@endsection
