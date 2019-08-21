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
              <h1>KRA GroupEmployee Groups</h1>
              <a href="{{URL('show1')}}" class="btn btn-sm btn-success"  style="margin-left:40%;margin-bottom:3%;">ADD GROUP</a>
              <table id="example7" class="table table-bordered table-striped">
                                      <thead>
                                              <tr>
                                              
                                              <td><b>EMP Name</b></td>
                                              <td><b>Group Name</b></td>
                                              
                                              <td><b>Start Date</b></td>
                                              <td><b>End Date</b></td>
                                           
                                      </thead>
                                                          <tbody>
                                                                                  @foreach($kras as $kra)
                                                                                              <tr>
                                                                                                  
                                                                                                <td>{{$kra->empname}}</td>
                                                                                                  <td>{{$kra->groupname}}</td>
                                                                                                  <td>{{$kra->startdate}}</td>
                                                                                                  <td>{{$kra->enddate}}</td>
                                                                                                                                                                                               </tr>
                                                                                  @endforeach
                                                          </tbody>
              </table>
</div>
{{$kras->links()}}
@endsection






