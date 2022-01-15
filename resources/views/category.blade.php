@extends('layouts.main')

@section('container')  

    <h1 class="mt-3">Post Category : {{ $category}} </h1>

    @foreach ($posts as $post)
    <article class="mt-5">
        <h2>
            <a href="/posts/{{$post->slug}} ">{{ $post->title }} </a></h2>
        <h5>By: {{ $post["author"] }}</h5> {{-- : namanya notasi object --}}
        <p>{{ $post->excerpt }}</p>

        {{-- <p>{{ $post["body"] }}</p> : Namanya Notasi Array  --}}

    </article>
    @endforeach

@endsection