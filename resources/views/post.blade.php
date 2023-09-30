@extends('layouts.main')
@section('container')
<article>
    <h2>{{ $posts->title }}</h2>
    <h5>By Agung Wahyudi kategory <a href="/c/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></h5>
    <p>{!! $posts->body !!}</p>
    <p>{{ $posts->excerpt }}</p>
</article>
<a href="/blog">Kembali</a>
@endsection
