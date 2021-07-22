@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to out blog application</h1>
        @if (!Auth::user())
            <p>
                <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                <a class="btn btn-success btn-lg" href="/login" role="button">Register</a>
            </p>
        @else
            <div style="opacity:0;">
                {!! redirect('/posts') !!}
            </div>
        @endif
    </div>
@endsection
