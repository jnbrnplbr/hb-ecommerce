@extends('layouts.app') {{-- calling the file layout/app.blade.php --}}

@section('content') {{--calling the yield('content') at layout/app.blade.php--}}
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1> {{--the $title has a value from the controller--}}
        <p>This is the index page</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Sign Up</a>
        </p>
    </div>
@endsection