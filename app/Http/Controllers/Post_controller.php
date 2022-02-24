<?php

namespace App\Http\Controllers;

use App\Models\Catagorie;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class Post_controller extends Controller
{
    //




    public function load(){

        



        $cat=post::all();



        foreach($cat as $a)

        {

   

     ?>



<tr>
                                                <td><?php echo $a->title; ?></td>
                                                <td>
                                                
                                                <?php
                                                if($a->user_find){
                                                    echo $a->user_find->name;

                                                }
                                                ?>
                                               
                                                </td>


                                                <td>
                                                <?php
                                                      foreach ($a->find_cat as $x )
                                                      {
                                                        echo $x->name." |";
                                                      }
                                                    //   {{ $x->name }} |
                                                            
                                                    //   @endforeach

                                                      ?>
                                                </td>




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
                                                
                                                       if($a->feature_image!=null)
                                                       {

                                                        
                                                        ?>

                                            <img width="50px" height="50px" src="<?php echo $a->feature_image; ?>" alt="">


                                                   



                                                    <?php

                                                       }
                                                     
                                                        ?>

                                                      
                                                


                                                </td>

                                                <td>
                                                   <?php   echo 'in future'; ?>
                                               </td>
                                                     <td>
                                                     <?php   echo $a->created_at->diffForHumans(); ?>
                                                           
                                                     </td>




                                            
                                                
         <td>
         <?php 
                                                
                                                if($a->status=='published')
                                                {
                                                 ?>

                                        <a  val='<?php echo $a->id; ?>' class="btn btn-sm btn-warning" id="pub_post" href="#"><i class="fa-solid fa-eye"></i></a>



                                             <?php

                                                }
                                                else{
                                                 ?>
                                                        <a  val='<?php echo $a->id; ?>' class="btn btn-sm btn-warning" id="unpub_post" href="#"><i class="fa-solid fa-eye-slash"></i></i></a>


                                               <?php
                                                }
                                                ?>                                
                  <a data-toggle="modal" data-target="#mod" val='<?php echo $a->id; ?>' class="btn btn-sm btn-warning" id="edit_post" href="#">edit</i></a>
                  <a val='<?php echo $a->id; ?>' class="btn btn-sm btn-danger"id="de_post" href="#">Delete</a>
        </td>
</tr>





     <?php






        }















        


     }




















    public function pub($id)
    {
        $x=Post::find($id);
        $x->status='unpublished';
        $x->save();
    }
    public function unpub($id)
    {
        $x=Post::find($id);
        $x->status='published';
        $x->save();
    }

    public function delete($id)
    {
        $x=Post::find($id);
        $x->delete();
    }
    public function update(Request $r)
    {


        $x=Post::find($r->id);
  
        if($r->hasFile('image_update')){

            



            $loc='/post/update/';

            $image=$r->file('image_update');
            $ex=$image->getClientOriginalExtension();
            $name='post_'.time().'.'.$ex;

            $image->move(public_path().$loc,$name);
            $db=$loc.$name;

            $x->feature_image=$db;
        }


        $x->title=$r->title;
        $x->slug=Str::slug($r->title);
        $x->content=$r->content;
        $x->update();
        $x->find_cat()->detach();
        $x->find_cat()->attach($r->box);
        return redirect()->back();
    }

    public function edit($id)
    {
       $x=Post::find($id);
       $post=$x->find_cat;
       $cat_id=Catagorie::all()->pluck('id')->toArray();

       return json_encode([
          

        "data"=>$x,
        "cat"=>$post,
        'catid'=>$cat_id


       ]);
       
    }



    public function index()
    {

         $cat=Catagorie::where('status','=','published')->get();
         $post=Post::all();
        //  dd($cat);
        return view('ADMIN.post.post',compact('cat','post'));
    }
    public function store(Request $r)
    {



        if($r->hasFile('image')){

  
           $image=$r->file('image');

            $loc='/post/upload/';
            $ex=$image->getClientOriginalExtension();
            $name='post_'.auth()->user()->id.time().'.'.$ex;

            $image->move(public_path().$loc,$name);
            $db=$loc.$name;
            

        }
        else{
            $db=null;
        }



        $post=Post::create([

             'user_id'=>auth()->user()->id,

             'title'=>$r->name,
             'slug'=>Str::slug($r->name),
             'content'=>$r->content,
             'feature_image'=>$db,

        ]);
        $post->find_cat()->attach($r->checkbox);





        return redirect()->back();
     





    }

}
