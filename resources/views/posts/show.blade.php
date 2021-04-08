<x-guest-layout>
{{$post->user->name}}: 
<!-- {{$post->description}}
<img src="{{ $post->img_url }}"> -->

<form action="/creatpost" method="POST">
{{csrf_field()}}
<input type="text" name="img_url" placeholder="mon post">
<input type="text" name="description" placeholder="description">
<input type="submit" value="upload">
</form>
</x-guest-layout>