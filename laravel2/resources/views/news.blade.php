@extends('layouts.main')

@section('title')
  News
@endsection

@section('headline')
  <h1>News</h1>
@endsection

@section('a1')
  <a class="nav-link" href="news">News</a>
@endsection

@section('a2')
  <a class="nav-link" href="/">Main</a>
@endsection

@section('a3')
  <a class="nav-link" href="categories">Categories</a>
@endsection

@section('content')
  @forelse($news as $value)
    <div class="alert alert-primary" role="alert">
      <a href="news/{{ $value['id'] }}">{{ $value['headline'] }}</a>
    </div>
  @empty
    <div class="alert alert-primary" role="alert">
      <p>Новостей нет</p>
    </div>
  @endforelse
@endsection
