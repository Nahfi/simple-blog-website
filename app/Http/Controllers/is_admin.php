<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class is_admin extends Controller
{
    //


    public function is_admin(){
        if(auth()->user()->is_admin==0){
            return redirect('/');
        }
        if(auth()->user()->is_admin==1){
            return redirect()->route('admin');
        }
    }
}
