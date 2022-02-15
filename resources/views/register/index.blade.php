@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="text-center pt-3">
        <img class="mb-4" src="/assets/favoritechara.png" alt="" height="130px">
    </div>
    <div class="col-lg-5">
        <main class="form-registration">
            <form action="/register" method="POST">
                @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>
            <div class="form-floating">
                <input type="text" name="name"  class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{old('name')}}">
                <label for="name">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="username"  class="form-control @error('username')is-invalid @enderror"  id="username" placeholder="username" required  value="{{old('username')}}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" name="email" id="email" class="form-control @error('email')is-invalid @enderror" placeholder="Email" required value="{{old('email')}}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password" placeholder="Password" required value="{{old('password')}}">
                <label for="password">Password</label>        
                @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already Register? <a href="/login">Login</a> </small>
            <p class="mt-5 mb-3 text-muted text-center">&copy; khuzaemah24</p>
        </main>
    </div>
</div>

    
@endsection