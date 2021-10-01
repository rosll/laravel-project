@extends('admin.layouts.app')

@section('title', 'Listagem dos Posts')

@section('content')
  <a href="{{ route('posts.create') }}">Create new Post</a>
  @if (session('message'))
    <div>
      {{ session('message') }}
    </div>
  @endif

  <form action="{{ route('posts.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Search">
    <button type="submit">Search</button>
  </form>

  <h1>Posts</h1>

  @foreach ($posts as $post)
    <p>
      {{ $post->title }}
      [ 
        <a href="{{ route('posts.show', $post->id) }}">Ver Detalhes</a> |
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
      ]
    </p>
  @endforeach

  <hr>
  @if (isset($filters))
    {{ $posts->appends($filters)->links() }}
  @else
    {{ $posts->links() }}
  @endif
@endsection