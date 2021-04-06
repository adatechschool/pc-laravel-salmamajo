{{$post->user->name}}: 
{{$post->description}}
<img src="{{ $post->img_url }}">

<form action="/posts" method="POST">
{{csrf_field()}}
<input type="text" name="img_url" placeholder="name">
<input type="text" name="description" placeholder="description">

<button type="submit" class="btn btn-danger">Go!</button>
</form>