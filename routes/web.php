<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
| --------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Emah Khujaemah",
        "email" => "khuza.emah24@gmail.com",
        "image" => "emah.jpg",
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

//halaman single post
// Route::get('posts/{slug}', [PostController::class, 'show']); - cara biasa
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//buat halaman untuk category
Route::get('/categories', function () {
    return view('categories ', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post by Categories : $category->name",
//         "active" => 'categories',
//         'posts'  => $category->posts->load('writer', 'category'),

//     ]);
// });

//langsung dari postingan tertentu
Route::get('/writers/{writer:username}', function (User $writer) {
    return view('posts', [
        'title' => "Post by User Posts $writer->name",
        'active' => 'posts',
        'posts'  => $writer->posts->load('writer', 'category'),
    ]);
});

