@extends('layouts.master')

@section('content')
    <div class="page-heading">
        <h1>DASHBOARD</h1>
    </div>
    <div class="page-body">

        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box infobox-type-5 hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">supervisor_account</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL COMPLAINT</div>
                        <div class="number">{{($total['complain'])? $total['complain']:0}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box infobox-type-5 hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">equalizer</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL DISTRICT</div>
                        <div class="number">{{($total['district'])? $total['district']:0}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box infobox-type-5 hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">shopping_cart</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL THANA</div>
                        <div class="number">{{($total['thana'])? $total['thana']:0}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box infobox-type-5 hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">assignment</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL FARI</div>
                        <div class="number">{{($total['fari'])? $total['fari']:0}}</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Complain List</div>
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
                                            <a href="{{asset('storage/'.$item->img)}}" data-fancybox="images" data-caption="{{ $item->message }}">
                                                <img src="{{asset('storage/'.$item->img)}}" alt="" height=30 width=30 />
                                            </a>
                                            <!-- <a href="{{asset('uploads/'.$item->img)}}" data-fancybox="images" data-caption="{{ $item->message }}">
                                                <img src="{{asset('uploads/'.$item->img)}}" alt="" height=30 width=30 />
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
                                                
                                                    Your browser doesn't support HTML5 video tag.
                                                </video>
                                                @endif
                                            </td>
                                     </tr>
                                     @endforeach
                                 </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')

    <script src="{{asset('resources')}}/assets/plugins/flot/jquery.flot.js"></script>
    <script src="{{asset('resources')}}/assets/plugins/flot-spline/js/jquery.flot.spline.js"></script>
    <script src="{{asset('resources')}}/assets/plugins/flot/jquery.flot.pie.js"></script>
    <script src="{{asset('resources')}}/assets/plugins/flot/jquery.flot.categories.js"></script>
    <script src="{{asset('resources')}}/assets/plugins/flot/jquery.flot.time.js"></script>

    <script>

        $( document ).ready(function() {

            $('[data-sparkline="true"]').each(function(i,key){var type=$(key).data('type');var height=$(key).data('height');var barColor=$(key).data('barColor');height=height===undefined?24:height;barColor=barColor===undefined?'#d2d2d2':barColor;$(key).sparkline('html',{type:type,barColor:barColor,height:height,chartRangeMin:0});});var flotChartDatas=[[[0,21],[1,12],[2,27],[3,12],[4,16],[5,20],[6,15],[7,12],[8,35],[9,20],[10,10],[11,18],[12,12]],[[0,3],[1,9],[2,15],[3,9],[4,16],[5,8],[6,15],[7,12],[8,19],[9,14],[10,10],[11,16],[12,10]]];var flotChartOptions={series:{lines:{show:false,fill:true},points:{show:false,radius:5,width:5},splines:{show:true,tension:0.4,lineWidth:1,fill:0.3},shadowSize:0},grid:{hoverable:true,clickable:true,tickColor:'#f0f0f0',borderWidth:1,color:'#f0f0f0'},colors:['#d0d0d0','#1ab394'],yaxis:{ticks:4}}
            setTimeout(initFlotChart,550);function initFlotChart(){$.plot('#line_chart',flotChartDatas,flotChartOptions);}
        });




    </script>

@endsection

