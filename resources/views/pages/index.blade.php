@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To BlogApp!</h1>
        <p>This is a website with a blog application. It also includes full authentication (sign in and login) and file uploading (png, jpep, etc..).</p>
        @if (Auth::guest())
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @endif
    </div>
@endsection
