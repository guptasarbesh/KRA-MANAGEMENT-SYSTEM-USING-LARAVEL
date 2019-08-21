@extends('layouts.admin')
@section('content')

<style>
.uper {
  margin-top: 40px;
}
</style>




<div class="uper">
              @if(session()->get('success'))
                  <div class="alert alert-success">
                  {{ session()->get('success') }}
                  </div><br />
              @endif



              <h3 class="heading_b uk-margin-bottom">KRA GROUP EMPLOYEE</h3>



            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                <div class="uk-width-medium-1-3">

                <a href="{{URL('show1')}}" class="btn btn-sm btn-success"  style="margin-left:40%;margin-bottom:3%;">ADD GROUP</a>                    

                </div>
                
                <div class="uk-width-medium-1-3">

                                         

                </div>
                </div>
               <div class="row">

                 </div><br><br>
                    <div class="uk-overflow-container">
                  
                    <div class="dt_colVis_buttons"></div>
                   
                       
                        <table id="dt_tableExport" class="uk-table uk-table-nowrap table_check" >
                            <thead >
                            <tr>
                            <th class="uk-width-1-10 uk-text-center small_col"><input type="checkbox" data-md-icheck class="check_all"></th>
                               
                               <th class="uk-width-2-10 uk-text-center">EMP Name</th>
                               <th class="uk-width-2-10 uk-text-center">Group Name</th>
                               <th class="uk-width-3-10 uk-text-center">Start Date</th>
                            
                               <th class="uk-width-2-10 uk-text-center">End Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($kras as $kra)
                                <tr>
                                    <td class="uk-text-center uk-table-middle small_col"><input type="checkbox"  data-md-icheck class="check_row"></td>
                                    <td class="uk-text-center">{{$kra->empname}}</td>
                                    <td class="uk-text-center">{{$kra->groupname}}</td>
                                    <td class="uk-text-center">{{$kra->startdate}}</td>
                                    <td class="uk-text-center">{{$kra->enddate}}</td>
                                  
                                    <td class="uk-text-center">
                       
                                        <a href="{{URL('edit/'.$kra->id)}}"  title="Edit"><i class="md-icon material-icons">&#xE254;</i></a>
                                        


                                        <a href="{{URL('destroy3/'.$kra->id)}}" data-message="Item Deleted!!!" title="Delete"><i class="md-icon material-icons">&#xE872;</i></a>
                                    </td>
                                </tr>
                            @endforeach



                            
                            
                             
                            </tbody>
                        </table>
                   
                </div>

                </div>
                
            </div>

 
</div>




@endsection






