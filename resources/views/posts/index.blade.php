@extends('layouts.default')

{{-- 
@section('title')
Blog Posts
@endsection
--}}

@section('title','Blog Posts')

@section('content')
<h1>
 Blog Posts
 <a href="{{ url('/posts/create') }}" class="header-menu">New Post</a>
</h1>
<ul>
    @forelse ($posts as $post)
      
  <li>
  <a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a>
  <a href="{{ action('PostsController@edit', $post) }}" class="edit">[Edit]</a>
  </li>
    @empty
  <li>No posts yet</li>
    @endforelse
</ul>
@endsection



