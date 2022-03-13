@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="text-center m-3">
                    <h1 class="m-3 ">{{$post->author->title}}</h1>
                    <h6>Author: <a href="/posts?author={{$post->author->name}} " class="text-decoration-none">{{ $post->author->name }}</a></h6> 
                    <h6>Write By <a href="/posts?writer={{$post->writer->username}} " class="text-decoration-none">{{ $post->writer->name }}</a> category 
                        <a href="/posts?category={{ $post->category->slug}}" class="text-decoration-none" >{{ $post->category->name}}</a>
                    </h6>
                </div>

                @if ($post->image)
                <div class="text-center" style="max-height:350px; overflow:hidden" > 
                    <img src="{{asset('storage/' . $post->image)}}" class="img-fluid  " alt="{{ $post->category->name }}">
                </div>
                @else                
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }} " class="img-fluid  " alt="{{ $post->category->name }}">
                @endif

                <article class="my-3 fs-5">
                <h4 class="mb-3">{{$post->title}}</h4>
                    {!! $post->body!!} {{-- Tag yg digunakan ketika tag html ingin dugunakan --}}  
                </article>
                                    
            <a href="/posts " class="text-decoration-none">Back to Posts</a>
            </div>
        </div>
    </div>

@endsection