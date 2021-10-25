@extends('layouts/Main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2 class="text center"><a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark text-center">{{ $post->title }}</h2></a>
            <p class="text-muted"><small>
                By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none text-dark">{{ $post->author->name }}</a>  
                in <a href="/posts?category={{ $post->category->slug }}"class="text-decoration-none text-dark">{{ $post->category->name }}</a></p></small>
            <img src="https://source.unsplash.com/720x200?{{ $post->name }}" alt="{{ $post->name }}">
            <article class="my-2" style="font-size: 18px">    
                {!! $post->body !!}
            </article>

            <a href="/posts"class="text-decoration-none btn btn-info text-light mb-3">Back to Posts</a>
        </div>
    </div>
</div>



@endsection



