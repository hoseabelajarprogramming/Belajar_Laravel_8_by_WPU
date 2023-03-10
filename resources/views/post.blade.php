{{-- video 8 --}}

@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-5">{{ $post->title }}</h1>
                <p>By <a href="/posts?author={{ $post->user->username }}"
                        class="text-decoration-none">{{ $post->user->name }}</a>
                    in <a href="/posts?category={{ $post->category->slug }}"> {{ $post->category->name }} </a></p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid"
                    alt="{{ $post->category->name }}">
                <article class="my-3">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="d-block mt-5">Back to Posts</a>
            </div>
        </div>

    </div>
@endsection
{{-- video 8 --}}
