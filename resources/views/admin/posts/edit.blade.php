@extends('layouts.admin')

@section('content')
<h1>Create new Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('admin.posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Add title" aria-describedby="helpId" value="{{$post->title}}" minlenght="5" max="255" required>
      <small id="titleHelper" class="text-muted">Enter the title for the new post, 255 char MAX</small>
    </div>

    <div class="form-group">
      <label for="image">Change Post image</label>
      <img src="{{asset('storage/' . $post->image)}}" alt="">
      <input type="file" name="image" id="image">
    </div>

    <div class="form-group">
      <label for="body">Text</label>
      <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="5">{{$post->body}}</textarea>
    </div>
    
    <button type="submit" class="btn btn-success">Update Post</button>

</form>
@endsection