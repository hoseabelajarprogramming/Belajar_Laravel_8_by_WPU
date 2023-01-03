{{-- video 11 --}}
@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>

@if($posts->count())
<div class="card mb-3">
  <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
    <p><small class="text-muted">By <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a class ="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}"> {{ $posts[0]->category->name }} </a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
  </div>
</div>
@else
<p class="text-center fs-4">No Post found.</p>
<a class ="text-decoration-none btn  btn-primary" href="/posts/{{ $posts[0]->slug }}">Read More</a>

@endif

<div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4">
      <div class="card" >
        <div class="position-absolute px-3 py-2 text-white" style="background-color: 0,0,0,0.7"><a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p><small class="text-muted">By <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
 
          <p class="card-text">{{ $post->excerpt }}</p>
          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div> 

@endsection

{{-- video 12 --}}
