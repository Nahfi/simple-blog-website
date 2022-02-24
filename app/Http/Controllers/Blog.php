<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class Blog extends Controller
{



    public function index(){



        $all=Post::latest()->paginate(2);
        // dd($all);

        return view('User.blog.blog-sidebar',compact('all'));
    }
    public function single($slug){


        $single=Post::where('slug','=',$slug)->first();
        // dd($single);

        return view('User.blog.blog-single-sidebar',compact('single'));
    }
    public function cat($slug){


        // $single=Post::where('slug','=',$slug)->first();
        dd($slug);

        // return view('User.blog.blog-single-sidebar',compact('single'));
    }
    //
}
