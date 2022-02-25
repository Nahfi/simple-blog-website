@extends('ADMIN.layout.layout')

@section('dash')



<div class="row">

      <div class="col-lg-8">
            <div class="card">
                 
                  <div class="card-header">
                        
                         <div class="x">
                               <h3>update social icon</h3>
                         </div>
                   
                        
                  </div>
                  <div class="card-body">

                        
                  @php
                      $c=json_decode($find->social_icon,true) 
                     
                  @endphp 
       
  
                          <form   action="{{ route('icon_update') }}" method="post" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')

                           <div class="form-group">
                              <label for="">facebook</label>
                              <input value="{{ $c['fb'] }}" type="text" class="form-control"  name="fb">
                            </div>
                            <div class="form-group">
                              <label for="">linkedin</label>
                              <input value="{{ $c['li'] }}" type="text" class="form-control" name="li">
                            </div>
                            <div class="form-group">
                              <label for="">twiter</label>
                              <input value="{{ $c['tw'] }}" type="text" class="form-control" name="tw">
                            </div>
                            <div class="form-group">
                              <label for="">instagram</label>
                              <input value="{{ $c['ig'] }}" type="text" class="form-control" name="ig">
                            </div>
                            <div class="form-group">
                              <label for="">Babel</label>
                              <input value="{{ $c['bb'] }}" type="text" class="form-control" name="bb">
                            </div>
                            <div class="form-group">
                             
                              <input type="submit" class="" id="" value='update'>
                            </div>


           
                                    
                              
                          </form>
                   


                  </div>
            </div>
      </div>
</div>

 





@endsection