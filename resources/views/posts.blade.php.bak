@extends('layouts/main')
@section('container')
<h1>Halaman Blog</h1>
@foreach ($posts as $p)
<h4>
    <a href="posts/{{ $p->slug }}">
    {{ $p->title }}
    </a>
</h4>
<p>{{ $p->excerpt }}</p>
@endforeach
@endsection