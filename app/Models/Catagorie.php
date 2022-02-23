<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagorie extends Model
{
    use HasFactory;

    protected $guarded=[

        
    ];

    
    public function find_post(){


           
        return $this->belongsToMany(Post::class,'catagorie_post','cat_id','post_id');
    }


    














}
