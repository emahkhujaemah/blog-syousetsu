<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DashboardPostController;

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
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
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
        'categories' => Category::all()
    ]);
});

// Route::put('update/{ $author:slug }', [App\Http\Controllers\AuthorController::class, 'update'])->name('update');
// Route::resource('/authors', AuthorController::class)->except(['show', 'update']);
Route::resource('/authors', AuthorController::class);



// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post by Categories : $category->name",
//         "active" => 'categories',
//         'posts'  => $category->posts->load('writer', 'category'),

//     ]);
// });

//langsung dari postingan tertentu
// Route::get('/writers/{writer:username}', function (User $writer) {
//     return view('posts', [
//         'title' => "Post by User Posts $writer->name",
//         'active' => 'posts',
//         'posts'  => $writer->posts->load('writer', 'category')
//     ]);
// });


// Route::get('/authors/{authors:slug}', function (Author  $author) {
//     return view('posts', [
//         'title' => "Post by Author Posts $author->name",
//         'active' => 'posts',
//         'posts'  => $author->posts->load('author', 'category')
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
