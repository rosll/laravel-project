<h1>Register New Post</h1>
<form action="{{ route('posts.store') }}" method="post">
  @csrf
  <input type="text" name="title" placeholder="title">
  <textarea name="content" id="content" cols="30" rows="4" placeholder="content"></textarea>
  <button type="submit">Send</button>
</form>