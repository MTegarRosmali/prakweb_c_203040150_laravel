@extends('Layouts.main')

@section('container')

    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>

    <a href="/blog">Kembali</a>
@endsection