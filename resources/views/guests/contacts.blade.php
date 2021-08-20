@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <h1 class="display-3 text-center">Contacts Page</h1>
</div>

<div class="container">
    @include('partials.errors')
    @if(session('message_sent'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>{{session('message_sent')}}</strong> 
        </div>
        
        <script>
          $(".alert").alert();
        </script>
    @endif
    <form action="{{route('contacts.send')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="full_name">Full Name</label>
          <input type="text" name="full_name" id="full_name" class="form-control" placeholder="ex. Mario Rossi" aria-describedby="fullNameHelper" minlegth="5" maxlength="255" value="{{old('full_name')}}" required>
          <small id="fullNameHelper" class="text-muted">Type here your full name</small>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="example@mail.com" aria-describedby="emailHelpId" value="{{old('email')}}" required>
          <small id="emailHelpId" class="text-muted">Type here your email address</small>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" name="message" id="message" rows="6">{{old('message')}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">🍑 Send</button>
    </form>
</div>

@endsection