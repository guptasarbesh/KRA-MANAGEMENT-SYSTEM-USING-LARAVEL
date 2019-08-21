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

             

              <h3 class="heading_b uk-margin-bottom">KRA GROUPS</h3>

  <!-- <div class="uk-grid" data-uk-grid-margin>
    <div class="uk-width-large-1-5">
        <div class="md-card">
            <div class="md-card-content" style="height: 150px;">
                <h3 class="heading_a" style="text-align:center;">ADD DETAILS</h3>
                <div class="md-fab-wrapper md-fab-in-card" style="text-align:center;margin-top:4px;padding:-20px">
                    <a class="md-fab md-fab-wave"  href="{{URL('show0')}}"><i class="material-icons">&#xE52E;</i></a>
                  
                </div>
            </div>
        </div>
    </div>
    <div class="row">

    </div> -->

            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                <div class="uk-grid" data-uk-grid-margin>
                         <div class="uk-width-medium-1-3"></div>
                        <div class="uk-width-medium-1-3">
                            
                            <button class="md-btn md-btn-primary" data-uk-modal="{target:'#modal_header_footer'}">Add Details</button>
                            <div class="uk-modal" id="modal_header_footer">
                                <div class="uk-modal-dialog">
                                <button type="button" class="uk-modal-close uk-close uk-close-alt"></button>

                                <div class="uk-modal-header">
                                        <h3 class="uk-modal-title" style="text-align:center;">Add Details </h3>
                                </div>

                                <div class="uk-modal-footer uk-text-left " style="margin:auto;">
                                        

                                            <form  method="get" action="{{URL('/groupadd')}}" data-parsley-validate>
                                                @csrf
                                                

                                                    <div class="uk-width-9-10">
                                                            <div class="uk-grid">
                                                                <div class="uk-width-1-1">
                                                                    
                                                                    <div class="parsley-row">
                                                                        <label>GROUP Name</label>
                                                                        <input type="text" class="md-input" name="groupname" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="uk-grid">
                                                                <div class="uk-width-1-1">
                                                                    <div class="parsley-row">
                                                                        <label>GROUP DESCRIPTION</label>
                                                                        <input type="text" class="md-input" name="groupdescription" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>


                                                
                                                    <div class="uk-grid uk-margin-medium-top">
                                                        <div class="uk-width-1-1">
                                                            <button type="submit" href="" class="md-btn md-btn-primary">SUBMIT</button>
                                                        </div>
                                                    </div>
                                             </form>

                                    </div>
                                  
                                    <!-- <div class="uk-modal-footer uk-text-right">
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button><button data-uk-modal="{target:'#modal_new'}" type="button" class="md-btn md-btn-flat md-btn-flat-primary">Open New Modal</button>
                                    </div> -->
                                </div>
                         </div>
                            
                </div>
                <div class="uk-width-medium-1-3">

                
 
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <div class="uk-form-file md-btn md-btn-success">
                              Import File
                                <input id="form-file" type="file">
                            </div>
                            You can also use
                            <div class="uk-form-file uk-text-primary">text<input id="form-file" type="file"></div>.
                        </div>
                    </div>
            

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
                               
                                <th class="uk-width-4-10 uk-text-center">GROUP Name</th>
                                <th class="uk-width-3-10 uk-text-center">GROUP DESCRIPTION</th>
                             
                                <th class="uk-width-2-10 uk-text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($kras as $kra)
                                <tr>
                                    <td class="uk-text-center uk-table-middle small_col"><input type="checkbox" data-md-icheck class="check_row"></td>
                                 
                                    <td class="uk-text-center">{{$kra->groupname}}</td>
                                    <td class="uk-text-center">{{$kra->groupdescription}}</td>
                                  
                                    <td class="uk-text-center">
                       
                                        <a href="{{URL('edit/'.$kra->id)}}"  title="Edit"><i class="md-icon material-icons">&#xE254;</i></a>
                                        


                                        <a href="{{URL('destroy2/'.$kra->id)}}" title="Delete"><i class="md-icon material-icons">&#xE872;</i></a>
                                    </td>
                                </tr>
                            @endforeach



                            
                            
                             
                            </tbody>
                        </table>
                    </div>

                </div>
                
            </div>


</div>


<script>


    $('#dt_tableExport').DataTable( {
        "paging":   false,
        
    } );

</script>

@endsection






