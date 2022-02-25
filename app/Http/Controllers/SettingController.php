<?php

namespace App\Http\Controllers;
use  App\Models\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class SettingController extends Controller
{
    //

    public function icon_index(){



        $find=setting::find(1);
        return view('ADMIN.icon.icon',compact('find'));



    }

    public function client_index(){



        $find=setting::find(1);
        return view('ADMIN.client.client',compact('find'));



    }
    

    public function index(){



        $find=setting::find(1);
        return view('ADMIN.logo.index',compact('find'));



    }

    public function update_client(Request $r){


   

        $x=setting::find(1);
     
        if($r->hasFile('pic')){


            $loc='/upload/client/';
            $client_img=$r->file('pic');
            foreach($client_img as $s){

                $name='client_'.rand().".".$s->getClientOriginalExtension();
            



                $s->move(public_path().$loc,$name);
                $p[]=  ($loc.$name);
                $all_image=(json_encode($p));

            }
        }
        else{


            $all_image=(json_encode($r->prev));


        }
     

        $clinet=[

           "test1"=>$r->header,
           "test2"=>$r->header_1,
           "image"=>$all_image

        ];


        $x->client=json_encode($clinet);
        $x->update();


        return redirect()->back();
        
    }

    public function update_icon(Request $r){
        
        $x=setting::find(1);
        $arr=[
         'fb'=>$r->fb,
         'tw'=>$r->tw,
         'ig'=>$r->ig,
         'li'=>$r->li,
         'bb'=>$r->bb,

        ];


        $x->social_icon=json_encode($arr);
        $x->update();


        return redirect()->back();
        // dd($arr);

    }




    public function update(Request $r){
        
   $x=setting::find(1);



        // dd($r->all());

        if($r->hasFile('logo')){

         $image=$r->file('logo');
         $loc='/logo/upload/';
         $ex=$image->getClientOriginalExtension();
         $name="logo_".time().'.'.$ex;
         $image->move(public_path().$loc,$name);

          $x->logo=$loc.$name;





        }
        else{
            $x->logo=$r->logo_prev;


        }
        $x->logo_width=$r->width;
        $x->update();
        return redirect()->back();
//    dd($r->all());



    }
    
}
