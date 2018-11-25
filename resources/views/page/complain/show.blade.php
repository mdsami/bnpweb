@extends('layouts.master')

@section('extraCSS')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@endsection

@section('content')
<div class="page-heading">
  <h1>Complain</h1>
</div>
<div class="page-body">

  <div class="row clearfix">

    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
      <div class="panel panel-default">

        <div class="panel-heading">complain &nbsp;&nbsp;
        </div>
        <div class="panel-body p-b-25">

          <dl class="dl-horizontal">
            <dt>Phone</dt>
            <dd>{{$complain->phone}}</dd><br/> 

            <dt>Address</dt>
            <dd>{{$complain->message}}</dd><br/> 


            <dt>Thana</dt>
            <dd>{{$complain->thana->name or ""}}</dd><br/> 

            <dt>Fari</dt>
            <dd>{{$complain->fari->name or ""}}</dd><br/> 

            <dt>Image</dt>
            <dd>
              @if($complain->img)
              <a href="{{asset('storage/'.$complain->img)}}" data-fancybox="images" data-caption="{{ $complain->message }}">
                  <i class="fa fa-2x fa-image"></i>
                <img src="{{asset('storage/'.$complain->img)}}" alt="" height=30 width=30 />
              </a>
              <!-- <a href="{{asset('uploads/'.$complain->img)}}" data-fancybox="images" data-caption="{{ $complain->message }}">
                <img src="{{asset('uploads/'.$complain->img)}}" alt="" height=30 width=30 />
              </a> -->
              @endif
            </dd><br/> 

            <dt>Audio</dt>
            <dd>
              @if($complain->audio)
              <a data-fancybox href="#myAudio">
                <i class="fa fa-2x fa-volume-up"></i>
              </a>
              <audio width="640" height="40" controls id="myAudio" style="display:none;">
                <source src="{{asset('storage/'.$complain->audio)}}" type="audio/mpeg">
                <!-- <source src="{{asset('uploads/'.$complain->audio)}}" type="audio/mpeg"> -->
                  Your browser doesn't support HTML5 audio tag.
                </audio>
                @endif
              </dd><br/> 

              <dt>Video</dt>
              <dd>
                @if($complain->video)
                <a data-fancybox href="#myVideo">
                  <i class="fa fa-2x fa-video"></i>
                </a>
                <video controls id="myVideo" style="display:none;">
                  <source src="{{asset('storage/'.$complain->video)}}" type="video/mp4">
                  <!-- <source src="{{asset('uploads/'.$complain->video)}}" type="video/mp4"> -->
                    Your browser doesn't support HTML5 video tag.
                  </video>
                  @endif
                </dd><br/> 

              </dl>

            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection   
    
    @section('extraJS')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js"></script>
    @endsection