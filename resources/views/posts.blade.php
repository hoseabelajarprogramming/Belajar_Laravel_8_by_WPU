{{-- video 13 --}}
@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts" method="GET">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @elseif (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="...">
            <div class="card-body text-center">
                <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
                <p><small class="text-muted">By <a href="/posts?author={{ $posts[0]->user->username }}"
                            class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a class="text-decoration-none"
                            href="/posts?category={{ $posts[0]->category->slug }}"> {{ $posts[0]->category->name }} </a>
                        {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
            </div>
        </div>


        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 text-white" style="background-color: 0,0,0,0.7"><a
                                    href="/posts?category={{ $post->category->slug }}"
                                    class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                                alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p><small class="text-muted">By <a href="/posts?author={{ $post->user->username }}"
                                            class="text-decoration-none">{{ $post->user->name }}</a>
                                        {{ $post->created_at->diffForHumans() }}</small></p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post found.</p>
    @endif
    {{-- buat paginate --}}
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

    {{-- notes --}}
    {{-- tampilan diatas akan jelek paginatenya karena defaultnya laravel itu pake telwin sedangkan kondisinya sekarang pake bootstrap --}}
    {{-- cara aktifinnya dengan masuk ke App\Providers\AppServiceProvider --}}
@endsection


{{-- video 13 --}}
