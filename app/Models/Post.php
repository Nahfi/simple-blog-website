<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $guarded=[

        
    ];


    public function find_cat(){


           
        return $this->belongsToMany(Catagorie::class,'catagorie_post','post_id','cat_id');
    }

     
    public function user_find(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
