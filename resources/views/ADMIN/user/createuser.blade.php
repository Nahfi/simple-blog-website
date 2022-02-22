@extends('ADMIN.layout.layout')

@section('dash')



<div class="row">

      <div class="col-lg-8">
            <div class="card">
                 
                  <div class="card-header">
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
                              Create new user
                        </button>
                        <h4 class="card-title">ALL USER</h4>
                  </div>
                  <div class="card-body">
                        <div class="table-responsive">
                              <table id="dt" class="table table-striped mb-0">
                                    <thead>
                                          <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>permission</th>
                                                <th>Type</th>
                                                <th>action</th>
                                          </tr>
                                    </thead>
                                    <tbody id="tbb">

                                          @foreach ($all as $a)
                               
                                          <tr>
                                                <td>{{ $a->name }}</td>
                                            
                                                <td>{{ $a->email }}</td>
                                                <td>

                              

                                                     @if( $a->Roles)
                                                      {{ $a->Roles->name }}
                                                      @else
                                                    no role
                                                      @endif 
                                                </td>
                                                <td>


                                                     @if( $a->Roles)
                                                    @foreach (    json_decode($a->Roles->permission) as $xc)
                                                    {{ $xc }} |
                                                          
                                                    @endforeach
                                                      @else
                                                 no permission in admin pannel
                                                      @endif 
                                                </td>
                                                <td> 
                                                      
                                                      @if($a->is_admin==1) 
                                                      admin
                                                      @elseif ($a->is_admin==0)
                                                      user
                                                      @endif
                                                
                                                </td>
                                                <td>
                                                      
                                                      <a data-toggle="modal" data-target="#mod" val='{{ $a->id }}' class="btn btn-sm btn-warning" id="ee" href="#">Edit</a>
                                                      <a val='{{ $a->id }}' class="btn btn-sm btn-danger"id="dd" href="#">Delete</a></td>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create user</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           


            <div class="wrap shadow">
                  <div class="card">
                        <div class="card-body">
                              <h2>Sign Up</h2>
                              <form id="form_submit" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                          <label for="">Name</label>
                                          <input class="form-control" type="text" name="name">
                                    </div>
                                    <div class="form-group">
                                          <label for="">Email</label>
                                          <input class="form-control" type="email" name="email">
                                    </div>
                                  
                                    <div class="form-group">
                                          <select name="type" class="form-select" style="width:100%; height:40px; border:1px solid #b9b3b3 ;border-radius:4px" aria-label="Default select example">
                                                <option selected> Type</option>
                                                <option value="1">Admin</option>
                                                <option value="0">User</option>
                                               
                                          </select>
                                    </div>
                                
                                    <div class="form-group">
                                          <select name="role" class="form-select" style="width:100%; height:40px; border:1px solid #b9b3b3 ;border-radius:4px" aria-label="Default select example">
                                                <option selected>Role</option>
                                                @foreach ($role as $r)
                                              
                                                <option value="{{ $r->id }}">{{ $r->name }}</option>
                                                       
                                                @endforeach
                                              </select>
                                    </div>

                                    <div class="form-group">
                                          <input class="btn btn-primary" type="submit" value="insert">
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
            <h5 class="modal-title" id="exampleModalLabel">update user</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           


            <div class="wrap shadow">
                  <div class="card">
                        <div class="card-body">
                              <h2>Sign Up</h2>
                              <form id="f" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                          <label for="">Name</label>
                                          <input class="form-control" type="text" name="name" id="na">
                                          <input class="form-control" type="hidden" name="id" id="idd">
                                    </div>
                                    <div class="form-group">
                                          <label for="">Email</label>
                                          <input class="form-control" type="email" name="email" id="em">
                                    </div>
                                  
                                    <div class="form-group">

                                          <label for="">Type</label>
                                          <input type="checkbox" name="ck" value="1" id="n1">
                                          <label for="n">admin</label>




                                          <input class="chk" type="checkbox" name="ck"  value="0"  id="o1">

                                          <label for="o">user</label>
                          
                                     
                                          {{-- <select name="type" class="form-select" style="width:100%; height:40px; border:1px solid #b9b3b3 ;border-radius:4px" aria-label="Default select example">
                                                <option selected> Type</option>
                                                <option value="1">Admin</option>
                                                <option value="0">User</option>
                                               
                                          </select> --}}
                                    </div>
                                
                                    <div class="form-group">
                                          <select name="role" class="form-select" style="width:100%; height:40px; border:1px solid #b9b3b3 ;border-radius:4px" aria-label="Default select example">
                                                <option selected>Role</option>
                                                @foreach ($role as $r)
                                              
                                                <option value="{{ $r->id }}">{{ $r->name }}</option>
                                                       
                                                @endforeach
                                              </select>
                                    </div>

                                    <div class="form-group">
                                          <input class="btn btn-primary" type="submit" value="insert">
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

@endsection