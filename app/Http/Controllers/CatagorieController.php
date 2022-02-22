<?php

namespace App\Http\Controllers;

use App\Models\Catagorie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CatagorieController extends Controller
{
    //


    public function delete($id)
    {
        $x=Catagorie::find($id);
        $x->delete();
    }
    public function pub($id)
    {
        $x=Catagorie::find($id);
        $x->status='unpublished';
        $x->save();
    }
    public function unpub($id)
    {
        $x=Catagorie::find($id);
        $x->status='published';
        $x->save();
    }

     public function index()
     {
         return view('ADMIN.cat.cat');
     }
     public function edit($id)
     {
        $x=Catagorie::find($id);
        return json_encode([
            'name'=>$x->name,
            'id'=>$x->id,


        ]);
        
     }

     public function load(){

        



        $cat=Catagorie::all();



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

        <a  val='<?php echo $a->id; ?>' class="btn btn-sm btn-warning" id="pub" href="#"><i class="fa-solid fa-eye"></i></a>



                                             <?php

                                                }
                                                else{
                                                 ?>
                                                        <a  val='<?php echo $a->id; ?>' class="btn btn-sm btn-warning" id="unpub" href="#"><i class="fa-solid fa-eye-slash"></i></i></a>


                                               <?php
                                                }
                                                ?>                                
                  <a data-toggle="modal" data-target="#mod" val='<?php echo $a->id; ?>' class="btn btn-sm btn-warning" id="editx" href="#">edit</i></a>
                  <a val='<?php echo $a->id; ?>' class="btn btn-sm btn-danger"id="de" href="#">Delete</a>
        </td>
</tr>





     <?php






        }















        


     }

     public function store(Request $r){

          



     Catagorie::create([

        'name'=>$r->name,
        'slug'=>Str::slug($r->name)
     ]);





     }
     public function update(Request $r){

      




        $x=Catagorie::find($r->idd);
        $x->name=$r->na;
        $x->slug=Str::slug($r->na);
        $x->save();






     }
}
