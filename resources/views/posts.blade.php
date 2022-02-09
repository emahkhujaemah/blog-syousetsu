@extends('layouts.main')

@section('container')    

    <h1 class="mt-3 mb-3 text-center">{{$title}}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">           
            <form action="/posts">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{request('category')}} ">
                @endif
                @if(request('writer'))
                    <input type="hidden" name="writer" value="{{request('writer')}} ">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{request('search')}} ">
                    <button class="btn btn-primary" type="buttton" >Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count()) 
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }} " class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h3>
                <small class="text-muted">
                    <p>Author: {{ $posts[0]["author"] }} <br> Write By <a href="/posts?writer={{$posts[0]->writer->username}} " class="text-decoration-none">{{ $posts[0]->writer->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug}}" class="text-decoration-none" >{{ $posts[0]->category->name}}</a> {{$posts[0]->created_at->diffForHumans()}}
                    </p>
                </small>
                <p class="card-text">{{$posts[0]->excerpt}}</p>               
                <a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)              
            <div class="col-md-4 mb-3">
                <div class="card">                    
                    <div class="position-absolute px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug}}" class="text-white text-decoration-none">{{ $post->category->name}}</a></div>
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="car  d-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <small class="text-muted">
                            <p>Author: {{ $posts[0]["author"] }} <br> Write By <a href="/posts?writer={{$post->writer->username}} " class="text-decoration-none">{{ $post->writer->name }}</a> {{$posts[0]->created_at->diffForHumans()}}
                            </p>
                        </small>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/posts/{{$post->slug}}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>          
            @endforeach
        </div>
</div>

    @else
    <p class="text-center fs-4">No Post Found</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>


@endsection