@extends('frontend.general.layouts.master')
@section('main-content')
  <div class="col-lg-9 login-section">
    <div class="row login-wrapper no-margin">
        <div class="col-lg-8">
          <div class="row main-login-left no-margin">
            <h2 class="login-title">Login Into Your Account</h2>
            <p class="login-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis magni illum quos, pariatur voluptates praesentium molestias aspernatur, mollitia nulla doloribus.</p>
            <label class="login-form-error">
              {{Session::get('loginError')}}
            </label>
            <label class="login-form-error">
              {{Session::get('loggedOut')}}
            </label>
             <label class="login-form-error">{{Session::get('Registered')}}</label>
            <form action="" id="user-login-form" method="post">
              {!! csrf_field() !!}
              <div class="form-group{{ $errors->has('input-email') ? 'has-error' : '' }}">
                <label for="">User Email</label>
                <input type="text" id="loginid" class="form-control" name="input-email" aria-describedby="Login ID">
                <label class="login-form-error">{{ $errors->first('input-email') }}</label>
              </div><!-- .form-group ends -->
              <div class="form-group">
                <label for="">Password: </label>
                <input type="password" id="loginpw" class="form-control" name="input-password" aria-describedby="Login Password">
                <label class="login-form-error">{{ $errors->first('input-password') }}</label>
              </div><!-- .form-group ends -->
              <div class="form-group">
                <label for="remember-me"><input type="checkbox" id="remember-me" name="remember-me"> Remember Me</label>
                <label><a href="#" class="forgot-psw">Forgot Password?</a></label>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn login-form-btn form-login-btn">Login</button>
                <button type="button" class="btn login-form-btn form-signup-btn" onclick="window.location.href='{{ url('signup') }}'">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row main-login-right no-margin">
          </div>
        </div>

    </div>
  </div><!-- .login-section ends -->
@stop
