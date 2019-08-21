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
            <form class="form-horizontal" method="get" action="{{URL('/employeeadd')}}">
            @csrf
                <fieldset>

                        <!-- Form Name -->
                        <legend>KRA GROUPS EMPLOYEE </legend>
       
               

                        <div class="form-group">
        
        <div class=row>

                <div class="col-md-4">

                     <label class="col-md-4  control-label" for="name">Employee Name</label>  

                    <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user icons">
                                    </i>
                                  </div>
                          <input id="empname" name="empname" type="text" placeholder="Employee Name" class="form-control input-md" required>
                    </div>


                </div> 

                  <div class="col-md-4">


                  

                      <label class="col-md-6 control-label" for="description">Group Name</label>
                      <select class="form-control m-bot15" name="groupname" style="width:25vw;margin-left:10%;">


                    @foreach($abcds as $abcd)
                          <option >{{ $abcd->groupname }}</option>    

                      @endforeach

                    </select>
                    

                 

                  </div>
        </div>

        </div>

         <div class="form-group">
        
        <div class=row>
                        

                  <div class="col-md-4">


                    <!-- Text input-->
                                  <div class="form-group">
                                    @csrf
                                      <label class="col-md-4 control-label" for="description">StartDate</label>  
                                              
                                                      <div class="input-group">
                                                              <div class="input-group-addon">
                                                                  <i class="fa fa-male icons" style="font-size: 20px;"></i>
                                                    
                                                              </div>
                                                                <input  name="startdate" type="date" placeholder="startdate" class="form-control input-md" required>
                                                      </div>
                                            
                                  </div>

                  </div>
        </div>

        </div>

        <div class="form-group">
        
        <div class=row>
                        

                  <div class="col-md-4">


                    <!-- Text input-->
                                  <div class="form-group">
                                    @csrf
                                      <label class="col-md-4 control-label" for="description">EndDate</label>  
                                              
                                                      <div class="input-group">
                                                              <div class="input-group-addon">
                                                                  <i class="fa fa-male icons" style="font-size: 20px;"></i>
                                                    
                                                              </div>
                                                                <input  name="enddate" type="date" placeholder="enddate" class="form-control input-md" required>
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

   <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>

@endsection
