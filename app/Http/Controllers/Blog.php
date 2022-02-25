<?php

namespace App\Http\Controllers;

use App\Models\Catagorie;
use App\Models\Post;
use App\Models\Post_Comment;
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

    public function comment(Request $r){

        if(!auth()->user()){
            return  redirect()->route('login');
        }
        else{
            // dd($r->all());


            $x=new Post_Comment();
            $x->user_id=auth()->user()->id;
            $x->post_id=$r->id;
            $x->comment=$r->comment;
            $x->save();
            return  redirect()->back();

        }
    }









public function search(Request $r){


   



    $find=Post::where('title','like','%'.$r->search.'%')->orWhere('content','like','%'.$r->search.'%')->get();

  return view('User.blog.search',compact('find'));




}





    public function cat($slug,$id){





        $find=Catagorie::find($id)->find_post;
        // dd($find);

        return view('User.blog.catblog',compact('find'));

        // $single=Post::where('slug','=',$slug)->first();
        // dd($id);
        dd($slug);


        // return view('User.blog.blog-single-sidebar',compact('single'));
    }
    //
}
