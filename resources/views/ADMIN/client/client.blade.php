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
                      $c=json_decode($find->client,true) 
                    
                  @endphp 
       
                     



  
                          <form   action="{{ route('client_update') }}" method="post" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')

                           <div class="form-group">
                              <label for="">Client text header</label>
                              <input value="{{ $c['test1'] }}" type="text" class="form-control"  name="header">
                            </div>

                           <div class="form-group">
                              <label for="">Client text header-1</label>
                              <input value="{{ $c['test2'] }}" type="text" class="form-control"  name="header_1">
                            </div>
                            <label for="">all client logo</label>
                            @foreach (json_decode($c['image']) as $cd )
                        
                              
                              <img src="{{ asset($cd) }}" alt="">
                        
                           @endforeach
                          
                           <div class="form-group">
                              <label for="">image</label>
                              <input  type="file" class="form-control"  name="pic[]"  multiple>
                            </div>

                           <div class="form-group">
                              @foreach (json_decode($c['image']) as $cd )
                        
                              
                              <input value="{{ $cd }}"  type="hidden" class="form-control"  name="prev[]"  multiple>

                        
                              @endforeach
                              
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