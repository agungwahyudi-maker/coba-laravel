@extends('layouts/main')
@section('container')
@foreach ($posts as $p)
<h4>
    <a href="posts/{{ $p->slug }}">
    {{ $p->title }}
    </a>
    <a href="c/{{ $p->slug }}">
    {{ $p->name }}
    </a>
</h4>
@endforeach
@endsection