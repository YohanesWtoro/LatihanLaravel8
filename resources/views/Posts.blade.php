@extends('layouts/Main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center">
    <div class="col-md-6"> 
        <form action="/posts">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit" >Search</button>
                </div>
        </form>
    </div>
</div>

@if ($posts->count())
<div class="card mb-3">
  <img class="card-img-top" src="https://source.unsplash.com/1200x400?{{ $posts[0]->name }}" alt="{{ $posts[0]->name }}">
  <div class="card-body">
    <h2 class="card-title text-center"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark text-center">{{ $posts[0]->title }}</a></h3>
    <p class="text-center"><small class="text-muted">Written By <a href="/posts?author={{ $posts[0]->author->username }}"class="text-decoration-none text-dark">{{ $posts[0]->author->name }}</a>
    In Category <a href="/posts?category={{ $posts[0]->category->slug }}"class="text-decoration-none text-dark ">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</p></small>

    <p class="card-text fs-6">{{ $posts[0]->excerpt }}</p>
    <p class="card-text fs-6"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none">Read More...</a></p>
  </div>
</div>


<div class="container">
    <div class="row">
        @foreach($posts->skip(1) as $post)
        <div class="col-md-4">
            <div class="card">
                <div class="position-absolute p-1" style="background-color: rgba(0,0,0,0.5)"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">
                    <small>{{$post->category->name}}</small></a>
                </div>
                <img class="card-img-top" src="https://source.unsplash.com/600x400?{{ $post->name }}" alt="{{ $post->name }}">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                        <p><small class="text-muted">Written By <a href="/posts?author={{ $posts[0]->author->username }}"class="text-decoration-none text-dark">{{ $posts[0]->author->nasme }}</a> {{ $posts[0]->created_at->diffForHumans() }}</p></small>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
                    </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else
    <p class="text-center fs-1"> Posts Not Found</p>
@endif

{{ $posts->links() }}

@endsection
