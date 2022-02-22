<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class Role_controller extends Controller
{
    //


    public function delete($id)
    {
       
        $x=Role::find("$id");
        $x->delete();
        return redirect()->back()->with('success','role delete');
    }

    public function show(){

        $all=Role::all();

      


        $arr=array();
        foreach($all as $p){


         
            if($p->Users->first()){
              $user=$p->Users->first()->name;
            }
            else{
              $user='no user in this role';

            }

            $arr[]=[

                 'id'=>$p->id,
                'name'=>$p->name,
                "permission"=>(json_decode($p->permission)),
              
                "user"=> $user
            ];
        }
    
        // dd($arr);
      
       
        return view('ADMIN.user.role.create_user_role',compact('arr'));
    }


    public function edit($id){
        
        $a=Role::find($id);

        $name=$a->name;
        $permission=json_decode($a->permission);
        return json_encode([
            'id'=>$a->id,
            'name'=>$name,
            'permission'=>$permission
        ]);
    }
    public function update(Request $r){



        
        $x=Role::find($r->id);
        $x->name=$r->name;
        $x->permission=json_encode($r->chk);
        $x->save();
        return redirect()->back()->with('success','role updated');

    }
    public function store(Request $r){
   
    $r->validate([
        'name'=>['required'],
        'chk'=>['required'],
    ]);
    $role= new Role();
    $role->name=$r->name;
    $role->slug=Str::slug($r->name);
    $role->permission=json_encode($r->chk);
     $role->save();
    return redirect()->back()->with('success','role created');

    }


}
