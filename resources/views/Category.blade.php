@extends('layouts/Main')

@section('container')
<h1 class="mb-3">Posts Category : {{ $category }}</h1>

@foreach($posts as $post)
<article class="mb-5">    
    <h1>
    <a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h1>
    <h6 class="mt-3">
    By. <a href="/author/{{ $post->user->username }}" class="text-decoration-none text-dark">{{ $post->user->name }}</a> 
    in <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none text-dark ">{{ $post->category->name }}</a></h6>
    <p>{{ $post->excerpt }}</p>
    
    <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
</article>

    @endforeach
<a href="/posts"class="text-decoration-none btn btn-info text-light">Back to All Posts</a>
    @endsection
