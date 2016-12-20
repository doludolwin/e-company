@extends('layouts.wrapper')

@section('content')

@include('layouts.float')

<div class="container" style="min-height: 500px;">
    <div class="row middle">
        <div class="col-md-6 col-lg-4 col-sm-8 col-xs-12">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>join us</h3>
                    <p>Good luck and have fun.</p>
                </div>
                <div class="panel-body">
                    <form class="form-vertical" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div class="panel-wrapper">
<!-- name field -->
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div>
                                    <input id="name" type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block warning-red">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
<!-- end of name field -->

<!-- mail address field -->
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div>
                                    <input id="email" type="email" class="form-control" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block warning-red">
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
                                        <span class="help-block warning-red">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
<!-- end of password field -->

<!-- confirm password field -->
                            <div class="form-group">
                                <div style="margin-bottom: 60px;">
                                    <input id="password-confirm" type="password" class="form-control"  placeholder="Confirm Password" name="password_confirmation" required>
                                </div>
                            </div>
<!-- end of confirm password field -->

<!-- log in button -->
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn btn-primary">
                                        Sign up
                                    </button>
                                </div>
                            </div>
<!-- end of submit button -->

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
