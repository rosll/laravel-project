<a href="{{ route('posts.create') }}">Create new Post</a>
<h1>Posts</h1>

@foreach ($posts as $post)
  <p>{{ $post->title }}</p>
@endforeach