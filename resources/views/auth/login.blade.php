@extends('layouts.wrapper')

@section('content')

@include('layouts.float')

<div class="container">
    <div class="row middle">
        <div class="col-md-6 col-lg-4 col-sm-8 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>welcome back</h3>
                    <p>Its nice to see you again.</p>
                </div>
                <div class="panel-body">
                    <form class="form-vertical" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="panel-wrapper">
<!-- mail address field -->
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <div>
                                    <input id="email" type="email" class="form-control" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
<!-- end of mail field -->

<!-- password field -->
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <div>
                                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
<!-- end of password field -->

<!-- remember checkbox -->
                            <div class="form-group" style="margin-bottom: 90px;">
                                <div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> <span class="item-text">Remember Me</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
<!-- end of remember checkbox -->

<!-- log in button -->
                            <div class="form-group" style="margin-bottom: .5rem;">
                                <div class="button">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                </div>
                            </div>
<!-- end of submit button -->

<!-- forgot password link -->
                            <div class="forgot">
                                <a href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
<!-- end of forgot password link -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
