@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Details</div>

                <div class="card-body">

                    <form method="POST" action="{{URL('update/'.$kra->id)}}">
             
                        
                        @csrf

                        Percentage: <input type="number" name="sarbesh" value="{{$kra->percentage}}" class="form-control"/><br><br>
                        <input type="submit" value="Save"/>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
