@extends('layouts.app')

@section('content')
    @if (count($posts) > 0)
    @foreach ($posts as $post)
    <div class="container">
        <div class="well">
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        </div>
    </div>
    @endforeach
    @else
    <h1>No post found</h1>
    @endif
@endsection
