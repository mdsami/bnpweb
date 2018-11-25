@if ($errors->any())
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="text-center alert" style="margin-bottom:0px !important;">

            @foreach ($errors->all() as $error)
            <div class="alert alert-danger text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="fa fa-fw fa-times-circle"></i>
                <strong>{{ $error }}</strong>
            </div>
            @endforeach
        </div>
    </div>
</div>
@php 
session(['errors' => '']);
@endphp
@else

<div class="row">
    @if (session('success'))
    <div class="col-md-10 col-md-offset-1">
        <div class="alert alert-success text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-fw fa-check-circle"></i>
            <strong>{{ session('success') }}</strong>
        </div>
    </div>
    @php 
    session(['success' => '']);
    @endphp
    @endif
</div>
@endif