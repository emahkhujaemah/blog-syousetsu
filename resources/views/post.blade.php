@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{$post->title}}</h1>
                <h5>Author: {{ $post->author->name }}</h5> 
                <h6>Write By <a href="/posts?writer={{$post->writer->username}} " class="text-decoration-none">{{ $post->writer->name }}</a> in 
                    <a href="/posts?category={{ $post->category->slug}}" class="text-decoration-none" >{{ $post->category->name}}</a>
                </h6>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }} " class="card-img-top" alt="{{ $post->category->name }}">
                
                <article class="my-3 fs-5">
                    {!! $post->body!!} {{-- Tag yg digunakan ketika tag html ingin dugunakan --}}  
                </article>
                                    
            <a href="/blog " class="text-decoration-none">Back to Posts</a>
            </div>
        </div>
    </div>

@endsection