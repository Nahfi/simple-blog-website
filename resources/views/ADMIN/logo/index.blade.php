@extends('ADMIN.layout.layout')

@section('dash')



<div class="row">

      <div class="col-lg-8">
            <div class="card">
                 
                  <div class="card-header">
                        
                         
                   
                        
                  </div>
                  <div class="card-body">
                      
                   
                          <form   action="{{ route('logo_update') }}" method="post" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')

                    


                           <img height="45px" width="90px" class="bg-dark" src="{{ asset($find->logo) }}" alt="">
                                    
                           <div class="m mt-5">
                              <input type="file" name="logo">
                              <input type="hidden" name="logo_prev" value="{{ $find->logo }}">
                              <label for="width">width: </label>
                                
                            
                                <input type="text" name="width" value="{{ $find->logo_width }}">
                           

                              <input type="submit" name="submit" value="update">

                           </div>
                                    
                              
                          </form>
                   


                  </div>
            </div>
      </div>
</div>

 





@endsection