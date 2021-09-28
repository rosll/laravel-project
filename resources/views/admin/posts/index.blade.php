<a href="{{ route('posts.create') }}">Create new Post</a>
@if (session('message'))
  <div>
    {{ session('message') }}
  </div>
@endif
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