@extends('layouts.main')

@section('title')
  Registration
@endsection

@section('headline')
  <h1>Hello everybody</h1>
@endsection

@section('a1')
  <a class="nav-link" href="/">Main</a>
@endsection

@section('a2')
  <a class="nav-link" href="news">News</a>
@endsection

@section('a3')
  <a class="nav-link" href="categories">Categories</a>
@endsection

@section('content')
  <form action="{{ route('add') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Headline</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="headline">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Text</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="text">
    </div>
    <div class="form-group">
      <label for="category">category</label>
      <input type="number" class="form-control" id="category" min="1" max="2" name="category">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
