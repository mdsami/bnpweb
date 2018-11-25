@extends('layouts.auth')

@section('title','Sign In')

@section('content')
    <div class="sign-in-page">
        <div class="signin-form-area">
            <h1><b>{{ config('app.name', 'Hostel') }}</b></h1>
            <div class="signin-top-info">Sign in to start your session</div>
            <div class="row padding-15">
                <div class="col-sm-2 col-md-2 col-lg-4"></div>
                <div class="col-sm-8 col-md-8 col-lg-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-envelope" id="basic-addon1"></span>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            </div>
                            @if ($errors->has('email'))
                                <span class="text-danger text-center">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-lock" id="basic-addon2"></span>
                                <input id="password" type="password" class="form-control" name="password" required>


                            </div>
                            @if ($errors->has('password'))
                                <span class="text-danger text-center">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="checkbox icheck m-l--20">
                                    <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <a href="{{route('password.request')}}" class="pull-right">Forgot Password
                                    <i class="fa fa-unlock m-l-5 font-14"></i>
                                </a>
                            </div>
                        </div>


                        <br/>
                        <div class="row form-bottom-info">
                            <div class="col-xs-12 text-center">

                                <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>
                            </div>

                        </div>
                    </form>

                </div>
                <div class="col-sm-2 col-md-2 col-lg-4"></div>
            </div>
        </div>
    </div>
@endsection
@section('extraCSS')
    <style>
        .sign-in-page .signin-form-area {
            width: 100% !important;
            padding-left: 15%;
            padding-right: 15%;
        }

        .sign-in-page .signin-form-area .form-bottom-info a {
            color: #555 !important;
            font-size: 13px;
            text-decoration: none;
        }
    </style>
@endsection
@section('extraJS')
    <script src="{{asset('resources')}}/assets/js/pages/examples/signin.js"></script>
@endsection