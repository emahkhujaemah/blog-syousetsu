@extends('layouts.main')

@section('container')    

    <h1 class="mt-3">{{$title}}</h1>

    {{-- @if ($posts->count()) 
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }} " class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h3>
                <small class="text-muted">
                    <p>Author: {{ $posts[0]["author"] }} <br> Write By <a href="/writers/{{$posts[0]->writer->username}} " class="text-decoration-none">{{ $posts[0]->writer->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug}}" class="text-decoration-none" >{{ $posts[0]->category->name}}</a> {{$posts[0]->created_at->diffForHumans()}}
                    </p>
                </small>
                <p class="card-text">{{$posts[0]->excerpt}}</p>               
                <a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif --}}

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    {{-- <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}"> --}}
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($posts->skip(1) as $post)
    <article class="mt-4 border-bottom pb-3">
        <h2>
            <a href="/posts/{{$post->slug}}" class="text-decoration-none">{{ $post->title }} </a></h2>
        <h5>Author: {{ $post["author"] }}</h5> 
        <h6>Write By <a href="/writers/{{$post->writer->username}} " class="text-decoration-none">{{ $post->writer->name }}</a> in 
            <a href="/categories/{{ $post->category->slug}}" class="text-decoration-none" >{{ $post->category->name}}</a>
        </h6> {{-- : namanya notasi object --}}
        <p>{{ $post->excerpt }}</p>

        {{-- <p>{{ $post["body"] }}</p> : Namanya Notasi Array  --}}

        <a href="/posts/{{$post->slug}}" class="text-decoration-none">Read more ...</a>
        

    </article>
    @endforeach

@endsection