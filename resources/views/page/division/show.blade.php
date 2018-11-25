@extends('layouts.master')

@section('content')
<div class="page-heading">
    <h1>Division</h1>
</div>
<div class="page-body">
    <div class="row clearfix">

        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Division &nbsp;&nbsp;

                </div>
                <div class="panel-body p-b-25">
                    <dl class="dl-horizontal">
                        <dt>Division Name</dt>
                      <dd>{{$division->name}}</dd>
                  </dl>

              </div>
          </div>
      </div>
  </div>
</div>
@endsection
