@extends('layouts.admin')


@section('content')



<div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-3-5">
                    <div class="md-card">
                        <div class="md-card-content">
                            <form  method="get" action="{{URL('/kraadd')}}" data-parsley-validate>
                            @csrf
                            

                                <div class="uk-width-9-10">
                                        <div class="uk-grid">
                                            <div class="uk-width-1-2">
                                                <div class="parsley-row">
                                                    <label>KRA Name</label>
                                                    <input type="text" class="md-input" name="kraname" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-2">
                                                <div class="parsley-row">
                                                    <label>KRA DESCRIPTION</label>
                                                    <input type="text" class="md-input" name="kradescription" required>
                                                </div>
                                            </div>
                                        </div>
                                </div>


                             
                                <div class="uk-grid uk-margin-medium-top">
                                    <div class="uk-width-1-1">
                                        <button type="submit" href="/krafront" class="md-btn md-btn-primary">SUBMIT</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> 
</div>




 

@endsection
