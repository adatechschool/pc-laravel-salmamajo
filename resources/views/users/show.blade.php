@extends('layouts.master')

<x-guest-layout>
  {{$user->name}}: 
  {{$user->email}}
  {{$user->password}}
  {{$user->biography}}
  {{$description}}
  {{$img_url}}
  
@section('title', $user->name)

@section('content')
  <h1>{{ $user->name }}</h1>
  <img src="{{ $img_url }}" alt="">

@foreach ($user->posts as $post)
  <img src="{{ $post->img_url }}" alt="">
  <p>description :  {{ $post->description }}</p>
@endforeach

  <p>{{ $description }}</p>


@endsection

</x-guest-layout>

