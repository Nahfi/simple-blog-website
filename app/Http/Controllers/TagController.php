<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    //
    public function index()
    {
        return view('ADMIN.tag.tag');
    }


    public function pub($id)
    {
        $x=Tag::find($id);
        $x->status='unpublished';
        $x->save();
    }
    public function unpub($id)
    {
        $x=Tag::find($id);
        $x->status='published';
        $x->save();
    }

    public function edit($id)
    {
       $x=Tag::find($id);
       return json_encode([
           'name'=>$x->name,
           'id'=>$x->id,


       ]);
       
    }

    public function update(Request $r){

      




        $x=Tag::find($r->idd);
        $x->name=$r->na;
        $x->slug=Str::slug($r->na);
        $x->save();






     }







    public function load(){

        



        $cat=Tag::all();



        foreach($cat as $a)

        {

   

     ?>



<tr>
                                                <td><?php echo $a->name; ?></td>
                                                <td><?php echo $a->slug; ?></td>
                                                <td>
                                                    
                                                    
                                                    <?php 
                                                
                                                       if($a->status=='published')
                                                       {
                                                        ?>

                                                    <span class="badge badge-success">published</span>



                                                    <?php

                                                       }
                                                       else{
                                                        ?>
                                                       <span class="badge badge-danger">Unpublished</span>

                                                      <?php
                                                       }
                                                       ?>
                                                


                                                </td>


                                            
                                                
         <td>
         <?php 
                                                
                                                if($a->status=='published')
                                                {
                                                 ?>

        <a  val='<?php echo $a->id; ?>' class="btn btn-sm btn-warning" id="pub_tag" href="#"><i class="fa-solid fa-eye"></i></a>



                                             <?php

                                                }
                                                else{
                                                 ?>
                                                        <a  val='<?php echo $a->id; ?>' class="btn btn-sm btn-warning" id="unpub_tag" href="#"><i class="fa-solid fa-eye-slash"></i></i></a>


                                               <?php
                                                }
                                                ?>                                
                  <a data-toggle="modal" data-target="#mod" val='<?php echo $a->id; ?>' class="btn btn-sm btn-warning" id="edit_tag" href="#">edit</i></a>
                  <a val='<?php echo $a->id; ?>' class="btn btn-sm btn-danger"id="de_tag" href="#">Delete</a>
        </td>
</tr>





     <?php






        }















        


     }






     public function delete($id)
     {
         $x=Tag::find($id);
         $x->delete();
     }






    
    public function store(Request $r){

          



        Tag::create([
   
           'name'=>$r->name,
           'slug'=>Str::slug($r->name)
        ]);
   
   
   
   
   
        }
}
