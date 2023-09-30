<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $blog_post=Post::all();
        return view('posts',[
        'title' =>"Blog",
        'posts' =>$blog_post
        ]);
    }
    public function show(Post $post)
    {
        return view('post',[
        'title' =>"Single Blog",
        'posts' =>$post
        ]);
    }
    
    public function categories(Category $category)
    {
    return view('categoris',
        [
            'title'=>$category->name,
            'posts'=>$category->posts,
            'category'=>$category->name,
        ]);
    }
    
    public function categories_all()
    {
    return view('categoris',
        [
            'title'=>"Kategori",
            'posts'=>Category::all(),
            'category'=>Category::all(),
        ]);
    }
}