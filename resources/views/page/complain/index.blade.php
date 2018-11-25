@extends('layouts.master')

@section('extraCSS')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">
@endsection

@section('content')
<div class="page-heading">
    <h1>Complain</h1>
</div>
<div class="page-body">

 <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Complain Location</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 modal_body_content">
               <div id="map-canvas"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 modal_body_map">
              <div class="location-map" id="location-map">              
                <div style="width: 600px; height: 400px;" id="map_canvas"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="modal-footer">
              <button type="button" class="btn btn-link" data-dismiss="modal">CLOSE</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    

 <!-- Modal -->

    @include('include.show_flash_error_message')

    <div class="row clearfix">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Complain &nbsp;&nbsp;
                    <a href="{{ route('complain.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"
                            aria-hidden="true"></i>&nbsp; Add New Complain</a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover js-exportable dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Phone</th>
                                    <th>Complain</th>
                                    <th>Thana</th>
                                    <th>Fari</th>
                                    <th>Image</th>
                                    <th>Audio</th>
                                    <th>Video</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($complain as $item)
                                <tr>
                                    <td>{{ $loop->iteration or $item->id }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->message }}</td>
                                    <td>{{ $item->thana->name or "" }}</td>
                                    <td>{{ $item->fari->name or ""}}</td>
                                    <td>
                                        @if($item->img)
                                        <a href="{{ asset('storage/'.$item->img)}}" data-fancybox="images" data-caption="{{ $item->message }}">
                                            <i class="fa fa-2x fa-image"></i>
                                            <img src="{{asset('storage/'.$item->img)}}" alt="" height=30 width=30 />
                                        </a>
                                        <!-- <a href="{{asset('storage/'.$item->img)}}" data-fancybox="images" data-caption="{{ $item->message }}">
                                                <img src="{{asset('storage/'.$item->img)}}" alt="" height=30 width=30 />
                                            </a> -->
                                        @endif
                                    </td>
                                    <td>
                                        @if($item->audio)
                                        <a data-fancybox href="#myAudio">
                                            <i class="fa fa-2x fa-volume-up"></i>
                                        </a>
                                        <audio width="640" height="40" controls id="myAudio" style="display:none;">
                                            <source src="{{asset('storage/'.$item->audio)}}" type="audio/wav">
                                            <!-- <source src="{{asset('storage/'.$item->audio)}}" type="audio/mpeg"> -->
                                            Your browser doesn't support HTML5 audio tag.
                                        </audio>
                                        @endif
                                    </td>
                                    <td>
                                        @if($item->video)
                                        <a data-fancybox href="#myVideo">
                                            <i class="fa fa-2x fa-video"></i>
                                        </a>
                                        <video controls id="myVideo" style="display:none;">
                                            <source src="{{asset('storage/'.$item->video)}}" type="video/mp4">
                                            <!-- <source src="{{asset('storage/'.$item->video)}}" type="video/mp4"> -->
                                            Your browser doesn't support HTML5 video tag.
                                        </video>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('complain.show',$item->id) }}" title="View complain" class="btn btn-outline btn-success"><i
                                                class="fa fa-check" aria-hidden="true"></i> View</a>
                                        <a href="{{ route('complain.edit',$item->id) }}" title="Edit complain" class="btn btn-outline btn-primary"><i
                                                class="fa fa-edit"></i> Edit</a>

                                        <form method="POST" action="{{ route('complain.destroy',$item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-outline btn-danger" title="Delete complain"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i> Delete
                                            </button>
                                            <button type="button" class="btn btn-outline btn-primary showMap" data-lat= "{{$item->lat}}"  data-long= "{{$item->long}}" >
                                                <i class="fa fa-map" aria-hidden="true"></i> ViewonMap
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>complain Name</th>
                                    <th>OC Name</th>
                                    <th>OC Phone</th>
                                    <th>complain Address</th>
                                    <th>Image</th>
                                    <th>Audio</th>
                                    <th>Video</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection

@section('extraJS')
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_fn1Qc5ZwWLgZreki8qm1kv3qRyekhTg" async defer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    	var lat = "";
    	var lng = "";
        $(document).on("click",".showMap", function(){
        	$("#myModal").modal("show");
        	lat = $(this).data("lat");
        	lng = $(this).data("long");
        })
    
        $("#myModal").on('shown.bs.modal', function () {
                        
               	var myLatlng = new google.maps.LatLng( lat, lng );
		var mapOptions = {
		  zoom: 13,
		  center: myLatlng
		}
		var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
		
		var marker = new google.maps.Marker({
		    position: myLatlng,
		    title:"Hello World!"
		});

		// To add the marker to the map, call setMap();
		marker.setMap(map);
		            

    	});
   
</script>


@endsection