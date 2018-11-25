@extends('layouts.master')

@section('content')
    <div class="page-heading">
        <h1>Create New Thana</h1>
    </div>
    <div class="page-body">

        @include('include.show_flash_error_message')

        <div class="row clearfix">

            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Thana</div>
                    <div class="panel-body p-b-25">
                        <form method="POST" action="{{ route('thana.store') }}" accept-charset="UTF-8"
                              class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('/page/.thana.form')

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('extraJS')
<script>
    $(document).on('change', '#division', function () {
        var division = $(this).val();
        var url="{{ url('division')}}"+"/"+division+"/area";
        $.ajax({
            type: "GET",
            url: url,
            dataType: 'json',
            success: function (data) {
                var areas=data;
                $('#area').empty().selectpicker('refresh');
                $('#zone').empty().selectpicker('refresh');
                $('#district').empty().selectpicker('refresh');
                $.each(areas, function (i, area) {
                    $('#area').append('<option value="'+area.id+'">'+area.name+'</option>').selectpicker('refresh');
                });
            }
        });

    });
    $(document).on('change', '#area', function () {
        var area = $(this).val();
        var url="{{ url('area')}}"+"/"+area+"/zone";
        $.ajax({
            type: "GET",
            url: url,
            dataType: 'json',
            success: function (data) {
                var zones=data;
                $('#zone').empty().selectpicker('refresh');
                $('#district').empty().selectpicker('refresh');
                $.each(zones, function (i, zone) {
                    $('#zone').append('<option value="'+zone.id+'">'+zone.name+'</option>').selectpicker('refresh');
                });
            }
        });

    });
    $(document).on('change', '#zone', function () {
        var zone = $(this).val();
        var url="{{ url('zone')}}"+"/"+zone+"/district";
        $.ajax({
            type: "GET",
            url: url,
            dataType: 'json',
            success: function (data) {
                var districts=data;
                $('#district').empty().selectpicker('refresh');
                $.each(districts, function (i, district) {
                    $('#district').append('<option value="'+district.id+'">'+district.name+'</option>').selectpicker('refresh');
                });
            }
        });

    });

</script>
@endsection