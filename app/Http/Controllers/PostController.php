<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Author;


class PostController extends Controller
{

    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('writer')) {
            $writer = User::firstWhere('username', request('writer'));
            $title = ' by ' . $writer->name;
        }

        if (request('author')) {
            $author = Author::firstWhere('slug', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Post" . $title,
            "posts" => Post::latest()->filter(request(['search', 'category', 'writer', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    // public function show($slug){
    //     return view('post', [
    //         "title" => "Single Post",
    //         "post" => Post::find($slug) //titikdua2 = static di model
    //     ]);
    // }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
