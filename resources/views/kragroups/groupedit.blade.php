@extends('layouts.admin')

@section('content')


<div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-3-5">
                    <div class="md-card">
                        <div class="md-card-content">
                            <form  method="POST" action="{{URL('update/'.$kra->id)}}" data-parsley-validate>
                            @csrf
                            

                                <div class="uk-width-9-10">
                                        <div class="uk-grid">
                                            <div class="uk-width-1-2">
                                                <div class="parsley-row">
                                                    <label>GROUP Name</label>
                                                    <input type="text" class="md-input" value="{{$kra->groupname}}" name="sarbesh" required>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>


                             
                                <div class="uk-grid uk-margin-medium-top">
                                    <div class="uk-width-1-1">
                                        <button type="submit" href="/krafront" class="md-btn md-btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> 
</div>


@endsection
