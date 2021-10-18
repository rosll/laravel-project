@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

@csrf
<input type="file" name="image" id="image">
<input type="text" name="title" placeholder="title" value="{{ $post->title ?? old('title') }}">
<textarea name="content" id="content" cols="30" rows="4" placeholder="content">{{ $post->content ?? old('content') }}</textarea>
<button type="submit">Send</button>