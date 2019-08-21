@extends('layouts.admin')
    <style>
    body {
    
        background-image: url("https://venngage-wordpress.s3.amazonaws.com/uploads/2018/09/Simple-Background-Images-2.png");
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }


   
    </style>

@section('content')

   <div class="container">
        <div class="row">
          <div class="col-md">
            <form class="form-horizontal" method="get" action="{{URL('/groupadd')}}">
            @csrf
                <fieldset>

                        <!-- Form Name -->
                        <legend>KRA GROUP FILE</legend>
                                
                              <div class="form-group">
                              

                                                <div class="row">
                                                                <div class="col-md-4">

                                                                              <label class="col-md-4  control-label" for="groupname">GROUP Name</label>  
                                                                  
                                                                                <div class="input-group">
                                                                                              <div class="input-group-addon">
                                                                                                <i class="fa fa-user icons">
                                                                                                </i>
                                                                                              </div>
                                                                                      <input name="groupname" type="text" placeholder="Group Name" class="form-control input-md" required>
                                                                                </div>
                                                                  

                                                                </div>
                                                                 
                                                </div>
                                    
                              </div>

               

            <!-- Text input-->
            <div class="form-group">
        
            <div class=row>
                            

                        <div class="col-md-4">


                        <!-- Text input-->
                                      <div class="form-group">
                                        @csrf
                                          <label class="col-md-4 control-label" for="description">groupdescription</label>  
                                                  
                                                          <div class="input-group">
                                                                  <div class="input-group-addon">
                                                                      <i class="fa fa-male icons" style="font-size: 20px;"></i>
                                                        
                                                                  </div>
                                                                    <input  name="groupdescription" type="text" placeholder="Group DESCRIPTION" class="form-control input-md" required>
                                                          </div>
                                                
                                      </div>

                        </div>
            </div>

            </div>


                          <div class="form-group">
                                <label class="col-md-4 control-label" ></label>  
                                          <div class="col-md-4">
                                              <button type="submit" class="btn btn-primary">SUBMIT</button>
                                              <a href="#" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a>
                                            
                                          </div>
                          </div>

  </fieldset>
</form>
</div>



</div>
   </div>
  

@endsection
