<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

use App\Models\Category;

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

Route::get('/', [PostController::class, 'home']);
Route::get('/about', [PostController::class, 'about']);
Route::get('/blog', [PostController::class, 'index']);

// Halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
  return view('categories', [
    'title' => 'Post Categories',
    "active" => "categories",
    'categories' => Category::all(),

  ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Route::get('/categories/{category:slug}', function (Category $category) {
//   return view('posts', [
//     'title' => "Post by Category : $category->name",
//     "active" => "categories",
//     'posts' => $category->postModel->load('category', 'author'),
//     'category' => $category->name,
//   ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//   return view('posts', [
//     'title' => "Post by Author : $author->name",
//     'active' => 'blog',
//     'posts' => $author->postModel->load('category', 'author'),
//   ]);
// });