@extends('Layouts.main')

@section('container')

    <h2 class="mb-5">{{ $post->title }}</h2>

    <p>By. M.Tegar Nurul Fuad Rosmali in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/blog">Kembali</a>
@endsection