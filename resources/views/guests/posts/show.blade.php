@extends('layouts.app')

@section('content')



<div class="container">

    <h2>Single Post id:[{{$post->id}}]</h2>
    <a href="{{route('posts.index')}}" class="btn btn-secondary d-inline-block mb-3">
        <i class="fas fa-arrow-left fa-sm fa-fw"></i>
        Back to all posts
    </a>
    <img src="{{$post->image}}" alt="{{$post->title}}" class="img-fluid d-block">
    <h1 class="display-1">{{$post->title}}</h1>
    <p class="lead">{{$post->body}}</p>
</div>
@endsection