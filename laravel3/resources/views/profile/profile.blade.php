@extends('layouts.main')

@section('menu')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h1>Update profile</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Main</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/news">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/categories">Categories</a>
      </li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
  <h2>Name: {{ $userName }}</h2>
  <h2>Email: {{ $userEmail }}</h2>
  <img src="{{ $userAvatar }}" alt="">
  <form action="{{ route('updateProfile') }}" method="post">
    @csrf
    @if($errors->has('userName'))
      <div class="alert alert-danger">
        @foreach($errors->get('userName') as $error)
          <p style="margin-bottom: 0;">{{ $error }}</p>
        @endforeach
      </div>
    @endif
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="userName" value="{{ old('userName') }}">
    </div>
    @if($errors->has('userEmail'))
      <div class="alert alert-danger">
        @foreach($errors->get('userEmail') as $error)
          <p style="margin-bottom: 0;">{{ $error }}</p>
        @endforeach
      </div>
    @endif
    <div class="form-group">
      <label for="exampleInputEmail2">Email</label>
      <input type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" name="userEmail" value="{{ old('userEmail') }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
