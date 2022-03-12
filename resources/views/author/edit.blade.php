@extends('layouts.main')

@section('container')    

<h1 class="mt-3">Authors</h1>

<div class="col-lg">
    <form action="/authors/{{$author->slug}}" method="POST" class="mb-5" enctype="multipart/form-data">
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
    <button type="submit" class="btn btn-primary">Update Author</button>
    </form>                                                                
</div>


{{-- <form action=" {{action('App\Http\Controllers\AuthorController@store')}} " method="POST" class="mb-5" enctype="multipart/form-data">
    <div class="modal-body">
        <div class="col-lg">
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
</form> --}}


@endsection

