@extends('layouts.master')

@section('content')
    <div class="page-heading">
        <h1>Edit Area #{{ $area->id }}</h1>
    </div>
    <div class="page-body">

        @include('include.show_flash_error_message')

        <div class="row clearfix">

            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Area</div>
                    <div class="panel-body p-b-25">

                        <form method="POST" action="{{ route('area.update', $area->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('page.area.form', ['submitButtonText' => 'Update'])

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
