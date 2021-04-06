@extends('layouts.master')

@section('title', $user->name)

@section('content')
<h1>{{ $user->name }}</h1>
<h2>Mes posts :</h2>

@foreach ($user->posts as $post)

    <img src="{{ $post->img_url }}" alt="">
    <p>description :  {{ $post->description }}</p>
@endforeach




@endsection