@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{ $post->title }}</h1>
    <img src="/storage/cover_image/{{ $post->cover_image }}" style="width:100%;" />
    <hr />
    <div class="container" style="align-items:center;">
        {!! $post->body !!}
    </div>
    <hr />
    <small>Writtern on {{ $post->created_at }}</small>
    <hr />
    @if (!Auth::guest())
        @if (Auth::user()->id === $post->user_id)
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-default">Edit</a>
            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'float-right']) !!}
            {{ Form::hidden('_method', 'delete') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
        @endif
    @endif

@endsection
