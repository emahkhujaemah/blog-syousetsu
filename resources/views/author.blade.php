@extends('layouts.main')

@section('container')    

<h1 class="mt-3">Post Authors</h1>

            @foreach ($authors as $author)
            <div class="col-md-3">
                <a href="/posts?author={{$author->slug}} ">
                    <div class="card bg-dark text-white">
                        <div>
                            <h5 >{{ $author->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

@endsection

