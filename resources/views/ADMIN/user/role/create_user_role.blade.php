@extends('ADMIN.layout.layout')

@section('dash')



<div class="row">

      <div class="col-lg-6">
            <div class="card">
                  <div class="c mb-3 ">
                        @if($errors->any())

                        <div class="alert alert-danger">
                         <ul>
                             @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                             @endforeach
                         </ul>
                     </div>

                        @endif
                  </div>
                  <div class="c mb-3 mt-3">
                        @if(session()->has('success'))

                        <div class="alert alert-success">
                         <ul>
                          <li>{{ session()->get('success') }}</li>
                         </ul>
                     </div>

                        @endif
                  </div>
                  <div class="card-header">
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
                              Create new user
                        </button>
                        <h4 class="card-title">ALL Role</h4>
                  </div>
                  <div class="card-body">
                        <div class="table-responsive">
                              <table class="table table-striped mb-0">
                                    <thead>
                                          <tr>
                                                <th>Name</th>
                                           
                                                <th>permission</th>
                                                <th>User in this role</th>
                                                 
                                                 
                                                <th>action</th>
                                          </tr>
                                    </thead>
                                    <tbody>


                               
                                       
                                                
                               @foreach ($arr as $p )
                                
                          
                                        
                                          <tr>
                                                <td>{{ $p['name'] }}</td>
                                         
                                                <td>

                                                @foreach ($p['permission'] as $c)
                                                    {{ $c }}  |
                                                @endforeach

                                                </td>
                                                <td>{{ $p['user'] }}</td>
                                             
                                                <td>
                                                      
                                                     
                                                      <a data-toggle="modal" data-target="#exampleModal1"  class="btn btn-sm btn-warning" edit={{ $p['id'] }} id="edit" href="#">Edit</a>
{{-- 
                                                      <form action="{{ route('role_delete') }}" method="GET">

                                                            @csrf --}}
                                                       
                                                            <a type="submit"  class="btn btn-sm btn-danger" delete={{ $p['id'] }} id="" href="{{ route('role_delete',$p['id']) }}">delete</a>
{{--                                                 
                                                      </form> --}}
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create new role</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           


            <div class="wrap shadow">
                  <div class="card">
                        <div class="card-body">

                        


                              <h2>create role</h2>
                              <form action="{{ route('role_create') }}" method="POST" >
                                    <div class="form-group">
                                          @csrf
                                          <label for="">Name</label>
                                          <input class="form-control" type="text" name="name">
                                    </div>
                                    <div class="form-group">

                                          <label for="">Permission</label>
                                         <div class="x">
                                        

                                          <input type="checkbox" name="chk[]" value="super admin" id="x">
                                          <label for="x">super admin</label>




                                          <input type="checkbox" name="chk[]" value="post"  id="y">
                                          <label for="y">post creator</label>
                                          <input type="checkbox" name="chk[]" value="user" id="z">
                                          <label for="z">user creator</label>
                                         </div>
                                          
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





    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">update role</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           


            <div class="wrap shadow">
                  <div class="card">
                        <div class="card-body">

                        


                              <h2>Update</h2>
                              <form action="{{ route('role_update') }}" method="POST" >
                                    @csrf
                                    <div class="form-group">
                                        
                                          <label for="">Name</label>
                                          <input class="form-control" type="text" name="name" id="name">
                                          <input class="form-control" type='hidden' name="id" id="id">
                                    </div>
                                    <div class="form-group">

                                          <label for="">Permission</label>
                                         <div class="x">
                                        

                                          <input class="m1" type="checkbox" name="chk[]" value="super admin" id="n">
                                          <label for="n">super admin</label>




                                          <input class="m1" type="checkbox" name="chk[]"  value="post"  id="o">
                                          <label  for="o">post creator</label>
                                          <input class="m1" type="checkbox" name="chk[]" value="user" id="p">
                                          <label for="p">user creator</label>
                                         </div>
                                          
                                    </div>
                                 
                           
                                    <div class="form-group">
                                          <input class="btn btn-primary" type="submit" value="update">
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