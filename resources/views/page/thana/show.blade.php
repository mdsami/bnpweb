@extends('layouts.master')

@section('content')
    <div class="page-heading">
        <h1>Thana</h1>
    </div>
    <div class="page-body">

        @include('include.show_flash_error_message')

        <div class="row clearfix">

            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">Thana Details &nbsp;&nbsp;
                    </div>
                    <div class="panel-body p-b-25">

                        <dl class="dl-horizontal">
                      <dt>Name</dt>
                      <dd>{{$thana->name}}</dd> 
                                                 
                        <dt>Address</dt>
                      <dd>{{$thana->address}}</dd> 
                                                 
                        <dt>Phone no.</dt>
                      <dd>{{$thana->phone}}</dd> 
                                                 
                        <dt>Longitude</dt>
                      <dd>{{$thana->long}}</dd> 
                                                 
                        <dt>Latitude</dt>
                      <dd>{{$thana->lat}}</dd> 
                                                 
                        <dt>OC Name</dt>
                      <dd>{{$thana->oc}}</dd> 
                                                 
                        <dt>Division</dt>
                      <dd>{{$thana->division->name}}</dd> 
                                                 
                        <dt>Area</dt>
                      <dd>{{$thana->area->name}}</dd> 
                                                 
                        <dt>Zone</dt>
                      <dd>{{$thana->zone->name}}</dd>  
                                                 
                        <dt>District</dt>
                      <dd>{{$thana->district->name}}</dd> 
                                                 
                  </dl>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
