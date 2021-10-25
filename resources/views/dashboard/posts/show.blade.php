@extends('dashboard.layout.main')

@section('container')
    <div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="text center"><a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark text-center">{{ $post->title }}</h2></a>
            <div class="my-2">
                <a href="/dashboard/posts/" class="btn btn-success btn-sm "><span data-feather="arrow-left"></span> Back To My All Posts</a>
                <a href="" class="btn btn-warning btn-sm"><span data-feather="edit"></span> Edit My Post</a>

                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger btn-sm d-inline " onclick="return confirm('Are You Sure Delete This Post ?')"><span data-feather="x-octagon"></span> Delete My Post </button>
                </form>
            </div>
            <img src="https://source.unsplash.com/720x200?{{ $post->name }}" alt="{{ $post->name }}">
            <article class="my-2" style="font-size: 18px">    
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection

