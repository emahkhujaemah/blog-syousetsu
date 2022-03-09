@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{$post->title}}</h1>
                <h5>Author: <a href="/posts?author={{$post->author->name}} " class="text-decoration-none">{{ $post->author->name }}</a></h5> 
                <h6>Write By <a href="/posts?writer={{$post->writer->username}} " class="text-decoration-none">{{ $post->writer->name }}</a> in 
                    <a href="/posts?category={{ $post->category->slug}}" class="text-decoration-none" >{{ $post->category->name}}</a>
                </h6>

                @if ($post->image)
                <div style="max-height:350px; overflow:hidden" > 
                    <img src="{{asset('storage/' . $post->image)}}" class="img-fluid  " alt="{{ $post->category->name }}">
                </div>
                @else                
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }} " class="img-fluid  " alt="{{ $post->category->name }}">
                @endif
                
                <article class="my-3 fs-5">
                    {!! $post->body!!} {{-- Tag yg digunakan ketika tag html ingin dugunakan --}}  
                </article>
                                    
            <a href="/posts " class="text-decoration-none">Back to Posts</a>
            </div>
        </div>
    </div>

@endsection