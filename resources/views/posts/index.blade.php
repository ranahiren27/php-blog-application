@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card card-body bg-light" style="margin-bottom:10px;">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_image/{{ $post->cover_image }}" style="width:100%;" />
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                        <small>Writtern on {{ $post->created_at }}</small>
                    </div>
                </div>

            </div>
        @endforeach
        <div style="display:flex;align-content:center;justify-content:center;">
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    @else
        <p>No Post found.</p>
    @endif
@endsection
