{{-- video 5 --}}
@extends('layouts.main')
@section('container') 
{{-- penamaan section yaitu container, harus sama dengan dilayout --}}
<h1>Halaman about</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle" />
@endsection 
{{-- Video 5 --}}