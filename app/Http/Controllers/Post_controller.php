<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post_controller extends Controller
{
    //
    public function index()
    {
        return view('ADMIN.post.post');
    }

}
