@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="text-center p-3">
        <img class="mb-4" src="/assets/favoritechara.png" alt="" height="230px">
    </div>
    <div class="col-lg-5">
        <main class="form-signin">
            <form>
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>
            <label for="inputEmail" class="visually-hidden">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="visually-hidden">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">

            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Not Register? <a href="/register">Register Now!</a> </small>
            <p class="mt-5 mb-3 text-muted text-center">&copy; khuzaemah24</p>
        </main>
    </div>
</div>

    
@endsection