@extends('ADMIN.layout.layout')

@section('dash')



<div class="row">

      <div class="col-lg-8">
            <div class="card">
                 
                  <div class="card-header">
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
                              Create new post
                        </button>
                        <h4 class="card-title">ALL post</h4>
                  </div>
                  <div class="card-body">
                        <div class="table-responsive">
                              <table id="" class="table table-striped mb-0">
                                    <thead>
                                          <tr>
                                                

                                                <th>title</th>

                                                <th>user-name</th>

                                                <th>catagories </th>

                                                <th>status</th>

                                                <th>photo</th>

                                                <th>tag</th>

                                                <th>time</th>


                                               
                                                
                                                <th>action</th>
                                          </tr>
                                    </thead>
                                    <tbody id="posttb">

                                         
                                  @foreach ($post as $p )
                                
                          
                                        
                                          <tr>
                                                <td>{{ $p->title }}</td>
                                                <td>
                                                
                                                
                                                @if($p->user_find)
                                                      {{ $p->user_find->name }}
                                                @endif
                                                </td>
                                                <td>
                                                      @foreach ($p->find_cat as $x )
                                                      {{ $x->name }} |
                                                            
                                                      @endforeach
                                                </td>
                                            <td>
                                                  @if($p->status=='published')
                                                  <span class="badge badge-success">published</span>
                                                  @else
                                                  <span class="badge badge-danger">upublished</span>
                                                  @endif
                                            </td>
                                            <td>
                                                  @if($p->feature_image!=null)
                                                  <img width="50px" height="50px" src="{{ url($p->feature_image) }}" alt="">
                                                 
                                                  @endif
                                            </td>
                                            <td>
                                            in future
                                            </td>
                                            <td>
                                                  {{ $p->created_at->diffForHumans() }}
                                            </td>
                                               
                                            
                                             
                                                <td>
                                                      @if($p->status=='published')
                                                      <a  val='<?php echo $p->id; ?>' class="btn btn-sm btn-warning" id="pub_post" href="#"><i class="fa-solid fa-eye"></i></a>
                                                      @else
                                                      <a  val='<?php echo $p->id; ?>' class="btn btn-sm btn-warning" id="unpub_post" href="#"><i class="fa-solid fa-eye-slash"></i></i></a>
                                                      @endif
                                                     
                                                      <a data-toggle="modal" data-target="#mod" val='<?php echo $p->id; ?>' class="btn btn-sm btn-warning" id="edit_post" href="#">edit</i></a>
                                                      <a val='<?php echo $p->id; ?>' class="btn btn-sm btn-danger"id="de_post" href="#">Delete</a>
                                                     
                                                </td>
                                               </tr>
                                            
                                               @endforeach

                                                                
                                       
                                    
                                    </tbody>
                              </table>
                        </div>
                  </div>
            </div>
      </div>
</div>

    
    <!-- Modal -->
    <div  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create post</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           


            <div class="wrap shadow">
                  <div class="card">
                        <div class="card-body">
                              <h2>create post</h2>
                              <form method="post"  action="{{ route('post_store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                          <label for="">Name</label>
                                          <input id="name_post" class="form-control" type="text" name="name">
                                    </div>
                                   

                                    
                                          
                               
                                    <div class="form-group">
                                          <label for="" >Catagories</label>
                                          <br>


                                         
                                               
                                             


                                          
                                          @foreach ($cat as $c )
                                          <div class="checkbox">
                                                <label>
                                                      <input type="checkbox" value="{{ $c->id }}" name="checkbox[]" multiple> {{ $c->name }}
                                                </label>
                                          </div>
                                          @endforeach
                                     </div>
                                   
                                     <div class="form-group">
                                          <label for="" >content</label>
                                           <textarea class="ckeditor" name="content" id="txt" cols="30" rows="10"></textarea>
                                     </div>

                                     <div class="form-group">
                                          <label id="icon" for="im_tag"><i style="font-size:30px" class="fa-solid fa-image"></i></label>
                                          <input style="display: none" id="im_tag" class="form-control" type="file" name="image">

                                          <img style=" width:200px; height:200px     " src="" alt="" id="hide">
                                    </div>

                                    <div class="form-group">
                                          <input class="btn btn-primary" type="submit" value="insert" id="">
                                    </div>

                               
                              </form>
                        </div>
                  </div>
            </div>
            
      


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         
          </div>
        </div>
      </div>
    </div>



   
    <div class="modal fade" id="mod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">update post</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           


            <div class="wrap shadow">
                  <div class="card">
                        <div class="card-body">
                              <h2>update</h2>
                              <form id="" action="{{ route('post_update') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                          <label for="">title</label>
                                          <input class="form-control" type="text" name="title" id="title">
                                          <input class="form-control" type="hidden" name="id" id="idp">
                                    </div>
                                   
                                    <div class="form-group">
                                          <label for="" >Catagories</label>
                                          <br>


                                         
                                               
                                             


                                          
                                          @foreach ($cat as $c )
                                          <div class="checkbox">
                                                <label>
                                                      <input type="checkbox" id="ck{{ $c->id }}" value="{{ $c->id }}" name="box[]" multiple> {{ $c->name }}
                                                </label>
                                          </div>
                                          @endforeach
                                     </div>
                               
                                     <div class="form-group">
                                          <label style="display: block" for="" >content</label>
                                           <textarea class="CKEDITOR" name="content" id="d" cols="30" rows="10"></textarea>
                                     </div>


                                     <div class="form-group">


                                          <label id="icon" for="im_tag_post"><i style="font-size:30px" class="fa-solid fa-image"></i></label>
                                          <input style="display: none" id="im_tag_post" class="form-control" type="file" name="image_update">

                                          <img style=" width:200px; height:200px     " src="" alt="" id="hide1">
     


                                    </div>



                                    <div class="form-group ">
                                          <input class="btn btn-primary" type="submit" value="update">
                                    </div>
                                    </div>

                               
                              </form>
                        </div>
                  </div>
            </div>
            
      


          </div>
   
        </div>
      </div>
    </div>

@endsection