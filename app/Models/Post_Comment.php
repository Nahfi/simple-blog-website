<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_Comment extends Model
{
    use HasFactory;

    protected $guarded=[

        
    ];


    public function user_post(){

        return $this->belongsTo(Post::class,'post_id','id');


    }
    public function user_post_info(){

        return $this->belongsTo(User::class,'user_id','id');


    }
}

