@extends('layouts.master')

@section('content')
    <div class="page-heading">
        <h1>District</h1>
    </div>
    <div class="page-body">

        @include('include.show_flash_error_message')

        <div class="row clearfix">

            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">District Details &nbsp;&nbsp;
                        
                    </div>
                    <div class="panel-body p-b-25">

                        <div class="table-responsive">
                            <dl class="dl-horizontal">
                                              <dt>Name</dt>
                      <dd>{{$district->name}}</dd> 
                                                 
                        <dt>Address</dt>
                      <dd>{{$district->address}}</dd> 
                                                                       
                        <dt>Division</dt>
                      <dd>{{$district->division->name}}</dd> 
                                                 
                        <dt>Area</dt>
                      <dd>{{$district->area->name}}</dd> 
                                                 
                        <dt>Zone</dt>
                      <dd>{{$district->zone->name}}</dd>  
                                                 
                  </dl>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
