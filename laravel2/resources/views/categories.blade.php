@extends('layouts.main')

@section('title')
  Categories
@endsection

@section('headline')
  <h1>Categories</h1>
@endsection

@section('a1')
  <a class="nav-link" href="categories">Categories</a>
@endsection

@section('a2')
  <a class="nav-link" href="/">Main</a>
@endsection

@section('a3')
  <a class="nav-link" href="news">News</a>
@endsection

@section('content')
  @forelse($categories as $value)
    <div class="alert alert-primary" role="alert">
      <a href="categories/{{ $value['category_id'] }}">{{ $value['category'] }}</a>
    </div>
  @empty
    <div class="alert alert-primary" role="alert">
      <p>Категорий нет</p>
    </div>
  @endforelse
@endsection
