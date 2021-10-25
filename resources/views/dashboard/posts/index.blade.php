@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">My Posts | {{ auth()->user()->name }}</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">{{ session('success') }}</div>
    @endif
      <a href="/dashboard/posts/create" class="btn btn-primary btn-sm"><span data-feather="plus"></span> Add New Post</a>
      
      <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($posts as $post)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-success"><span data-feather="eye"></a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-primary"><span data-feather="edit"></a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure Delete This Post ?')"><span data-feather="x-octagon"></button>
                    </form>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>

@endsection


