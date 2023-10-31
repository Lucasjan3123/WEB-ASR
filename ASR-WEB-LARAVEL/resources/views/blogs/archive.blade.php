@extends('layout.layout')

@section('content')

@foreach($blogs as $blog)
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $blog->title }}</h2>
        <p class="blog-post-meta">{{ $blog->created_at->format('F j, Y') }}</p>
        {!! $blog->content !!}
    </div>
@endforeach



@endsection