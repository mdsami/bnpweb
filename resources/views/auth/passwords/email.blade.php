@extends('layouts.auth')
@section('title','Forgot Password')
@section('content')
    <div class="fp-page">
        <div class="fp-form-area">
            <h1><b>{{ config('app.name', 'Laravel') }}</b></h1>
            <div class="fp-top-info">Enter your email address that you used to register. We'll send you an email with
                your
                username and a link to reset your password.
            </div>
            <div class="row padding-15">
                <div class="col-sm-2 col-md-2 col-lg-4"></div>
                <div class="col-sm-8 col-md-8 col-lg-4">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-envelope" id="basic-addon1"></span>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-block btn-flat">Reset My Password</button>

                    </form>
                    <br/>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extraCSS')
    <style>
        .fp-page .fp-form-area {
            width: 100%;
            padding-left: 15%;
            padding-right: 15%;
        }

        .fp-page .fp-form-area .form-bottom-info a {
            color: #555 !important;
            font-size: 13px;
            text-decoration: none;
        }
    </style>
@endsection
@section('extraJS')
    <script src="{{asset('resources')}}/assets/js/pages/examples/forgot-password.js"></script>
@endsection