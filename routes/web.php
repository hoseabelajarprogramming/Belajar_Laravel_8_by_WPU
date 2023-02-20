<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Video 5 WPU
// Route::get('/', function () {
//     // return ('Halaman Home');
//     return view('home', [
//         'title' => 'Home'
//     ]);
// });
// Route::get('/about', function () {
//     // return ('Halaman About');
//     return view('About', [
//         "name" => "Samsudin",
//         "email" => "secsec992@gmail.com",
//         "image" => "Gyomei_Himejima.jpg",
//         "title" => "About"
//     ]);
// });

//video 12
Route::get('/', function () {
    // return ('Halaman Home');
    return view('home', [
        'title' => 'Home',
        'active' => 'home',
    ]);
});

Route::get('/about', function () {
    // return ('Halaman About');
    return view('About', [
        "name" => "Samsudin",
        "email" => "secsec992@gmail.com",
        "image" => "Gyomei_Himejima.jpg",
        "title" => "About",
        "active" => "about"
    ]);
});
//video 12

Route::get('/posts', [PostController::class, 'index']);

//halaman single post
// Route::get('posts/{slug}', [PostController::class, 'show']);
// Video 5 WPU


//Video 7
//halaman single post
//penamaan paramater {post} ini harus sama dengan yang ada di controller
//parameter {post} secara default akan mengirimkan id
// Route::get('posts/{post}', [PostController::class, 'show']);

//parameter {post:slug} akan mengirimkan slug
Route::get('posts/{post:slug}', [PostController::class, 'show']);
//Video 7


//video 8
// Route::get('/categories', function () {
//     return view('categories', [
//         'title' => 'Post Categories',
//         'categories' => Category::all()
//     ]);
// });

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('category', [
//         'title' => $category->name,
//         'posts' => $category->posts,
//         'category' => $category->name
//     ]);
// });
//video 8

// video 12
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
// video 12

//video 11
// untuk menampilkan blog berdasarkan category yang menulis blog yang di klasifikasikan dalam bentuk slug
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post by Category    : $category->name",
//         'posts' => $category->posts->load('category', 'user')
//     ]);
// });
//video 11

// video 13
// di video 13 halaman categories dan authors gak kepake

//video 12
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post by Category    : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'user')
//     ]);
// });
//video 12

//video 10
//untuk menampilkan blog berdasarkan user yang menulis blog yang di klasifikasikan dalam bentuk username
// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post by Author    : $author->name",
//         'active' => 'posts',
//         //penggunaan load itu digunakan untuk melakukan lazy load
//         //view Posts digunakan berulang kali untuk berbabagi routes
//         //pada pemanggilan di Post Controller sudah dilakukan eager loading sehingga pada route yang lain dilakukan eager lazy load
//         'posts' => $author->posts->load('category', 'user')
//     ]);
// });
//video 10

// video 13
