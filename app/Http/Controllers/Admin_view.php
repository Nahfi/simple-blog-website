<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_view extends Controller
{
  public function view(){





    // $data=json_decode(auth()->user()->Roles->permission);
    // dd($data);
      return view('ADMIN.admin');
  }
}
