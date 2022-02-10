@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="text-center pt-3">
        <img class="mb-4" src="/assets/favoritechara.png" alt="" height="130px">
    </div>
    <div class="col-lg-5">
        <main class="form-registration">
            <form>
            <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>
            <div class="form-floating">
                <input type="name" id="name" class="form-control rounded-top" required autofocus>
            <label for="name">Name</label>
            </div>
            <div class="form-floating">
                <input type="name" id="username" class="form-control" required>
            <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="email" id="inputEmail" class="form-control">
            <label for="inputEmail">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" id="password" class="form-control rounded-bottom">
            <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already Register? <a href="/login">Login</a> </small>
            <p class="mt-5 mb-3 text-muted text-center">&copy; khuzaemah24</p>
        </main>
    </div>
</div>

    
@endsection