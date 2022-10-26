@extends('Layouts.main')

@section('container')

    <h2 class="mb-5">{{ $post->title }}</h2>

    <p>By. M.Tegar Nurul Fuad Rosmali in {{ $post->category->name }}</p>

    {!! $post->body !!}

    <a href="/blog">Kembali</a>
@endsection