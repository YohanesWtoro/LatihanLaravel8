@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">

        @if(session()->has('Success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('Success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>    
        @endif

        @if(session()->has('loginErorr'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('loginErorr') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>    
        @endif


        <main class="form-signin">
        <form action="/login" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" autofocus required>
            <label for="email">Email address</label>
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            <label for="password">Password</label>
            </div>

            <div class="checkbox mb-3">
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
            <small class="d-block text center mt-2">Not Registered?<a href="/register">Register Now</a></small>
        </main>
    </div>
</div>
    
@endsection