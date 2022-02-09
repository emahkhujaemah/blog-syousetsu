<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


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

        return view('posts', [
            "title" => "All Post" . $title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'writer']))->paginate(7)->withQueryString()
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
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
