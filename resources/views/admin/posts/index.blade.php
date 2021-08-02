@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between">
    <h1>All Posts:</h1>
    <div>
        <a class="btn btn-primary" href="{{route('admin.posts.create')}}">
        <i class="fas fa-plus-square fa-sm fa-fw"></i>    
        Create Post</a>
        
    </div>
</div>

<table class="table table-striped table-inverse">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>IMAGE</th>
            <th>TITLE</th>
            <th>ACTIONS</th>
        </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td scope="row">{{$post->id}}</td>
                    <td><img width="150" src="{{$post->image}}" alt="{{$post->title}}"></td>
                    <td>{{$post->title}}</td>
                    <td>
                        <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">
                            <i class="fas fa-eye fa-sm fa-fw"></i>
                        </a>
                        <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-secondary">
                            <i class="fas fa-pencil-alt fa-sm fa-fw"></i>
                        </a>
                        <a href="" class="btn btn-danger">
                            <i class="fas fa-trash fa-sm fa-fw"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
</table>
@endsection