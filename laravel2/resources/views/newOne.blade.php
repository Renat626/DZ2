@extends('layouts.main')

@section('title')
  {{ $news[$id]["headline"] }}
@endsection

@section('headline')
  <h1>{{ $news[$id]["headline"] }}</h1>
@endsection

@section('a1')
  <a class="nav-link" href="/news">News</a>
@endsection

@section('a2')
  <a class="nav-link" href="/">Main</a>
@endsection

@section('a3')
  <a class="nav-link" href="/categories">Categories</a>
@endsection

@section('content')
  <div class="alert alert-primary" role="alert">
    <h1>{{ $news[$id]["headline"] }}</h1>
    <p>{{ $news[$id]["text"] }}</p>
  </div>
@endsection
