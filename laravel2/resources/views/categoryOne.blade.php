@extends('layouts.main')

@section('title')
  {{ $categories[$category_id]["category"] }}
@endsection

@section('headline')
  <h1>{{ $categories[$category_id]["category"] }}</h1>
@endsection

@section('a1')
  <a class="nav-link" href="/categories">Categories</a>
@endsection

@section('a2')
  <a class="nav-link" href="/">Main</a>
@endsection

@section('a3')
  <a class="nav-link" href="news">News</a>
@endsection

@section('content')
  @foreach($news as $value)
    @if ($value['category'] == $category_id)
      <div class="alert alert-primary" role="alert">
        <h1>{{ $value['headline'] }}</h1>
        <p>{{ $value['text'] }}</p>
      </div>
    @endif
  @endforeach
@endsection
