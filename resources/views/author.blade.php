@extends('layouts.main')

@section('container')    

<h1 class="mt-3">Authors</h1>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
{{session('success')}}
</div>
@endif

<button type="button" class="button btn-primary text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-square"> Create</i></button>

<div class="table-responsive col-lg-10">  
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name Author</th>
            <th scope="col">Country</th>
            <th scope="col">Twitter</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($authors as $author)
        <tr>
            <td> {{$loop->iteration}} </td>
            <td> <a href="/posts?author={{$author->slug}}" class="text-decoration-none text-dark"> {{ $author->name }} </td>
            <td> {{$author->category->name}} </td>
            <td> {{$author->twitter}} </td>
            <td>
                <button type="button" class="badge bg-warning text-decoration-none" data-bs-toggle="modal" data-bs-target="#edit-{{ $author->slug }}"><i class="bi bi-pencil-square"> Edit</i></button>

                <!-- Edit Modal -->
                <div class="modal fade" id="edit-{{ $author->slug }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Author</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <form action="{{ action('App\Http\Controllers\AuthorController@update', $author->slug) }} " method="POST" class="mb-5" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="col-lg">
                                        @method('put')
                                        @csrf
                                        <div class="mb-3 form-group">
                                            <label for="name" class="form-label">Author</label>
                                            <input type="text" class="form-control @error('name') is-invalid      
                                            @enderror" id="name" name="name" required autofocus value="{{old('name', $author->name)}}">
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>           
                                            @enderror
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input type="text" class="form-control @error('slug') is-invalid      
                                            @enderror" id="slug" name="slug" required value="{{old('slug', $author->slug)}}">
                                            @error('slug')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>           
                                            @enderror
                                        </div> 
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <select name="category_id" id="category" class="form-select">
                                                @foreach ($categories as $category)
                                                    @if (old('category_id', $author->category_id) == $category->id)
                                                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                                    @else
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endif          
                                                @endforeach
                                            </select>
                                        </div> 
                                        <div class="mb-3 form-group">
                                            <label for="twitter" class="form-label">Twitter</label>
                                            <input type="text" class="form-control @error('twitter') is-invalid      
                                            @enderror" id="twitter" name="twitter" required autofocus value="{{old('twitter', $author->twitter)}}">
                                            @error('twitter')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>           
                                            @enderror
                                        </div>                                                                
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update Author</button>
                                </div>
                            </form>                  
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
                
                <form action="/authors/{{$author->slug}}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><i class="bi bi-x-square"> Delete</i></button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>
</div>

<!-- Button trigger modal 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Create New Author
</button> -->

<!-- Create Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create New Author</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <form action=" {{action('App\Http\Controllers\AuthorController@store')}} " method="POST" class="mb-5" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="col-lg">
                        @csrf
                        <div class="mb-3 form-group">
                            <label for="name" class="form-label">Author</label>
                            <input type="text" class="form-control @error('name') is-invalid      
                            @enderror" id="name" name="name" required autofocus value="{{old('name')}}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>           
                            @enderror
                        </div>
                        <div class="mb-3 form-group">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid      
                            @enderror" id="slug" name="slug" required value="{{old('slug')}}">
                            @error('slug')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>           
                            @enderror
                        </div> 
                        <div class="mb-3 form-group">
                            <label for="category" class="form-label">Country</label>
                            <select name="category_id" id="category" class="form-select">
                                @foreach ($categories as $category)
                                    @if (old('category_id') == $category->id)
                                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                    @else
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endif          
                                @endforeach
                            </select>
                        </div> 
                        <div class="mb-3 form-group">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input type="text" class="form-control @error('twitter') is-invalid      
                            @enderror" id="twitter" name="twitter" required autofocus value="{{old('twitter')}}">
                            @error('twitter')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>           
                            @enderror
                        </div>                                                                
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create Author</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->

@endsection

