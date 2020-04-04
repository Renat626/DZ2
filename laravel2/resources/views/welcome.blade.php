@extends('layouts.main')

@section('title')
  Welcome
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

@section('a4')
  <a class="nav-link" href="home">Registration</a>
@endsection

@section('a5')
  @if (is_object(Auth::user()))
    @if (Auth::user()->name == 'admin')
      <a class="nav-link" href="add">Add</a>
    @endif
  @endif
@endsection
