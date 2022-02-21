@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <h1 class="mb-3">{{$post->title}}</h1>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my post</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{$post->slug}}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
            <br>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }} " class="img-fluid mt-3 " alt="{{ $post->category->name }}">
            
            <article class="my-3 fs-5">
                {!! $post->body!!} {{-- Tag yg digunakan ketika tag html ingin dugunakan --}}  
            </article>
                                
        <a href="/blog " class="text-decoration-none">Back to Posts</a>
        </div>
    </div>
</div>
@endsection