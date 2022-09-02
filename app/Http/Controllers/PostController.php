<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PostModel;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => "blog",
            "posts" => PostModel::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()

            // "posts" => PostModel::with(['author', 'category'])->latest()->get()
            // "posts" => PostModel::all()
        ]);
    }
    public function show(PostModel $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post,
            "active" => "blog",
        ]);
    }
    public function about()
    {
        return view('about', [
            "title" => "About",
            "active" => "about",
        ]);
    }
    public function home()
    {
        return view('home', [
            "name" => "Adam Ramdan",
            "email" => "arkun@gmail.com",
            "title" => "Home",
            "active" => "home",
        ]);
    }
}