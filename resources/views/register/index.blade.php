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
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text"
                            class="form-control @error('name') is-invalid
                        @enderror" id="name"
                            name="name" placeholder="name" value={{ old('name') }}>
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text"
                            class="form-control @error('username') is-invalid
                        @enderror"
                            id="username" name="username" placeholder="username" value={{ old('username') }}>
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email"
                            class="form-control @error('email') is-invalid
                        @enderror" id="email"
                            name="email" placeholder="name@example.com" value={{ old('email') }}>
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password"
                            name="password"class="form-control @error('password') is-invalid
                            @enderror"
                            id="password" placeholder="Password" value={{ old('password') }}>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

                </form>
                <small><a href="/login">Back to login</a></small>

            </main>
        </div>
    </div>
@endsection
{{-- Video 14 --}}
