{{-- video 14 --}}
@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif
            <main class="form-signin ">
                <h1 class="h3 mb-3 fw-normal">Please Login</h1>
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating">
                        {{-- <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="email" autofocus required>Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror --}}
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="email" autofocus required>Email address</label>

                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <label for="password" required>Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                </form>
                <small><a href="/register">Register</a></small>
            </main>
        </div>
    </div>
@endsection
{{-- Video 14 --}}
