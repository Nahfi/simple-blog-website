@extends('ADMIN.layout.layout')

@section('dash')



<div class="row">

      <div class="col-lg-8">
            <div class="card">
                 
                  <div class="card-header">
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
                              Create new catagories
                        </button>
                        <h4 class="card-title">ALL catagories</h4>
                  </div>
                  <div class="card-body">
                        <div class="table-responsive">
                              <table id=" " class="table table-striped mb-0">
                                    <thead>
                                          <tr>
                                                <th>Name</th>
                                                <th>slug</th>
                                                <th>status</th>
                                                
                                                <th>action</th>
                                          </tr>
                                    </thead>
                                    <tbody id="tc">

                                         
                               

                                                                
                                       
                                    
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
            <h5 class="modal-title" id="exampleModalLabel">Create catagories</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           


            <div class="wrap shadow">
                  <div class="card">
                        <div class="card-body">
                              <h2>create</h2>
                              <form id="form_submit_cat" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                          <label for="">Name</label>
                                          <input id="name" class="form-control" type="text" name="name">
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
            <h5 class="modal-title" id="exampleModalLabel">update catagories</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           


            <div class="wrap shadow">
                  <div class="card">
                        <div class="card-body">
                              <h2>update</h2>
                              <form id="fy" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                          <label for="">Name</label>
                                          <input class="form-control" type="text" name="na" id="na">
                                          <input class="form-control" type="hidden" name="idd" id="idd">
                                    </div>
                                   
                                    </div>
                               

                                    <div class="form-group ml-4">
                                          <input class="btn btn-primary" type="submit" value="update">
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