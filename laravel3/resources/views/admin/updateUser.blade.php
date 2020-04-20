@extends('layouts.main')

@section('menu')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h1>Update news</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Main</a>
      </li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
  <form action="{{ route('updateUser') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <select class="form-control" name="name" id="category">
        @foreach($users as $value)
          @if (Auth::user()->name != $value->name)
            <option value="{{ $value->id }}">{{ $value->name }}</option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <select class="form-control" name="isAdmin" id="category">
        <option value="0">0</option>
        <option value="1">1</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
