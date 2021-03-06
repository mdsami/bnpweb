@extends('layouts.master')

@section('content')
<div class="page-heading">
    <h1>Create New Complain</h1>
</div>
<div class="page-body">

    @include('include.show_flash_error_message')

    <div class="row clearfix">

        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Complain</div>
                <div class="panel-body p-b-25">
                    <form method="POST" action="{{ route('complain.store') }}" accept-charset="UTF-8"
                    class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    @include ('/page/.complain.form')

                </form>
            </div>
        </div>
    </div>

</div>
</div>
@endsection

@section('extraJS')
<script>
    $(document).on('change', '#thana', function () {
        $('#fari').empty().selectpicker('refresh');
    });
    $(document).on('change', '#fari', function () {
        $('#thana').empty().selectpicker('refresh');
    });
</script>
@endsection