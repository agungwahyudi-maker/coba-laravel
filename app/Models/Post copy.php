<?php

namespace App\Models;

class Post 
{
    private static $blog_post=[
        [
            "title" =>"Judul Post Pertama",
            "slug"  =>"judul-post-pertama",
            "post"  =>"lorem ipsum dolor sit am Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus nostrum assumenda accusamus? Tenetur quidem neque distinctio cupiditate recusandae laudantium officiis quam nihil unde blanditiis harum animi non, labore totam natus"
        ],
        [
            "title" =>"Judul Post Kedua",
            "slug"  =>"judul-post-kedua",
            "post"  =>"lorem ipsum dolor sit am Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus nostrum assumenda accusamus? Tenetur quidem neque distinctio cupiditate recusandae laudantium officiis quam nihil unde blanditiis harum animi non, labore totam natus"
        ],
    ];
    public static function all()
    {
        return collect(self::$blog_post);
    }
    public static function find($slug)
    {
        $posts=static::all();
        
        return $posts->firstWhere('slug',$slug);
    }
}