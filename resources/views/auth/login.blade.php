@extends('layouts.single')

@section('content')
<div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <h1>{{ config('app.name', 'Laravel') }}</h1>
          
            <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                <div class="col-lg-12">
                    <input type="username" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}" required autofocus/>
                    
                    @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-lg-12">
                    <input type="password" class="form-control" name="password" placeholder="Password" required />
                    
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-default submit">
                    Login
                </button>
                <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
          
            <div class="clearfix"></div>
            <br />

            <div>
                <p>©2017 All Rights Reserved. <br/>Privacy and Terms</p>
            </div>
          </div>
        </form>
      </section>
    </div>
</div>
@endsection
