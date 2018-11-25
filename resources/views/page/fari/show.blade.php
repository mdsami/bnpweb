@extends('layouts.master')

@section('content')
    <div class="page-heading">
        <h1>Fari</h1>
    </div>
    <div class="page-body">

        <div class="row clearfix">

            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">Fari Details &nbsp;&nbsp;
                    </div>
                    <div class="panel-body p-b-25">
                        <dl class="dl-horizontal">
                            
                        <dt>Name</dt>
                      <dd>{{$fari->name}}</dd> 
                                                 
                        <dt>Address</dt>
                      <dd>{{$fari->address}}</dd> 
                                                 
                        <dt>Phone no.</dt>
                      <dd>{{$fari->phone}}</dd> 
                                                 
                        <dt>Longitude</dt>
                      <dd>{{$fari->long}}</dd> 
                                                 
                        <dt>Latitude</dt>
                      <dd>{{$fari->lat}}</dd> 
                                                 
                        <dt>OC Name</dt>
                      <dd>{{$fari->oc}}</dd> 
                                                 
                        <dt>Division</dt>
                      <dd>{{$fari->division->name}}</dd> 
                                                 
                        <dt>Area</dt>
                      <dd>{{$fari->area->name}}</dd> 
                                                 
                        <dt>Zone</dt>
                      <dd>{{$fari->zone->name}}</dd>  
                                                 
                        <dt>District</dt>
                      <dd>{{$fari->district->name}}</dd> 
                                                 
                        <dt>Thana</dt>
                      <dd>{{$fari->thana->name}}</dd> 
                                                 
                       
                  </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
