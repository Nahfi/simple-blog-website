<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class User_controller extends Controller
{
    //


    public function delete($id){
     


        $del=User::find($id)->delete();
        return json_encode([

            'suc'=>true
        ]);
    }

    public function store(Request $r){
      
        // dd($r->all());
        
        $password='1234';
        $user=new User();
        $user->name=$r->name;
        $user->email=$r->email;
        if($r->role=='Role')
        {
            // dd("ok");
            $user->role_id=0;  
        }
        else if($r->role!='Role'){

       
        
            $user->role_id=$r->role;
        }
        
        if($r->type=='Type')
        {
            $user->is_admin=0;  
        }
        else if($r->type!='Type'){
            $user->is_admin=$r->type;
        }
        
         
    
      
      
        $user->password=Hash::make($password);
        $user->save();
        return json_encode([
            'suc'=>true
        ]);
    }






    public function update(Request $r){




    
        $find=User::find($r->id);
        $find->name=$r->name;
        $find->email=$r->email;
        $find->is_admin=$r->ck;

        if($r->role=='Role')
        {
            // dd("ok");
            $find->role_id=0;  
        }
        else if($r->role!='Role'){

       
        
            $find->role_id=$r->role;
        }
  $find->save();
 

  return json_encode([
      'suc'=>true
  ]);


    }

    public function edit($id){

      
        
    $fin=User::find($id);

  
    return json_encode([
        'data'=>$fin
    ]);
    }

    public function load_data(){




  $all=User::all();
  


  foreach($all as $a)
  {

    ?>



<tr>
                                                <td><?php echo $a->name  ?></td>
                                            
                                                <td><?php echo $a->email  ?></td>
                                                <td>

                                                    <?php 

                                                     if( $a->Roles)
                                                      echo $a->Roles->name;

                                                      
                                                      else{
                                                          echo 'no role';
                                                      }
                                                    
                                                    ?>
                                                </td>
                                                <td>
                                                 

                                                  <?php

                                                     if( $a->Roles)
                                                    foreach (json_decode($a->Roles->permission) as $xc)
                                             {
                                                  echo $xc ."|";    
                                             }
                                                          
                                               
                                                      else{
                                                              echo 'no permission in admin pannel';
                                                      }
                                            
                                                     

                                                      ?>
                                                </td>
                                                <td> 
                                                      <?php 
                                                      if($a->is_admin==1) 
                                                    {
                                                        echo "admin";
                                                    }
                                                      elseif ($a->is_admin==0)
                                                      {
                                                          echo "user";
                                                      }
                                                     

                                                      ?>
                                                
                                                </td>
                                                <td>
                                                      
                                                <a data-toggle="modal" data-target="#mod"    val='<?php echo $a->id ?>' class="btn btn-sm btn-warning" id="ee" href="#">Edit</a>
                                                      <a val='<?php echo $a->id ?>' class="btn btn-sm btn-danger"id="dd" href="#">Delete</a></td>
                                               </tr>


<?php
  }





        // return json_encode([

        //     'suc'=>true
        // ]);
    }
}
