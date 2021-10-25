@extends('layouts/Main')

@section('container')
<h1 class="mb-3">Posts Category</h1>

<div class="container">
    <div class="row">
        @foreach($categories as $category)
        <div class="col-md-4">
            <a href="/posts?category={{ $category->slug }}">
                <div class="card bg-dark text-white border-0">
                <img class="card-img" src="https://source.unsplash.com/700x750?{{ $category->slug }}" alt="{{ $category->slug }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-3 fs-3" style="background-color: rgba(0,0,0,0.5)">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>


@endsection
