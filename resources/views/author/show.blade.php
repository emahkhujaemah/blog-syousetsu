@extends('layouts.main')

@section('container')    

<h1 class="mt-3">Authors</h1>

<div class="table-responsive col-lg-10">  
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Name Author</th>
                <th scope="col">Country</th>
                <th scope="col">Twitter</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> {{$author->category->name}} </td>
                <td> {{$author->twitter}} </td>
                <td>
                    <form action="/authors/{{$author->slug}}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><i class="bi bi-x-square"> Delete</i></button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
    </div>

@endsection

