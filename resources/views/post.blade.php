@extends('layouts.main')

@section('container')
    <article class="mt-5">
        <h2>{{$post->title}}</h2>
        <h5>Author: {{ $post["author"] }}</h5> 
        <h6>Write By <a href="/writers/{{$post->writer->username}} " class="text-decoration-none">{{ $post->writer->name }}</a> in 
            <a href="/categories/{{ $post->category->slug}}" class="text-decoration-none" >{{ $post->category->name}}</a>
        </h6>

            {!! $post->body!!} {{-- Tag yg digunakan ketika tag html ingin dugunakan --}}

    </article>

    <a href="/blog " class="text-decoration-none">Back to Posts</a>
    <br>
    <br>
@endsection