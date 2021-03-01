@extends('frontend.general.layouts.master')
@section('main-content')
  <div class="col-lg-9 login-section">
    <div class="row login-wrapper no-margin">
        <div class="col-lg-8">
          <div class="row main-login-left no-margin">
            <h2 class="login-title">Join Us</h2>
            <p class="login-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis magni illum quos, pariatur voluptates praesentium molestias aspernatur, mollitia nulla doloribus.</p>

            <form action="" id="user-signup-form" method="post">
              {!! csrf_field() !!}
              <div class="form-row">
                <div class="col{{ $errors->has('first-name') ? 'has-error' : '' }}">
                  <label for="first-name">First Name</label>
                  <input type="text" id="first-name" name="first-name" class="form-control" aria-describedby="">
                  <label class="login-form-error">{{ $errors->first('first-name') }}</label>
                </div>
                <div class="col">
                  <label for="middle-name">Middle Name</label>
                  <input type="text" id="middle-name" name="middle-name" class="form-control" aria-describedby="">
                  <label class="login-form-error"></label>
                </div>
                <div class="col{{ $errors->has('last-name') ? 'has-error' : '' }}">
                  <label for="last-name">Last Name</label>
                  <input type="text" id="last-name" name="last-name" class="form-control" aria-describedby="">
                  <label class="login-form-error">{{ $errors->first('last-name') }}</label>
                </div>
              </div>
              
              <div class="form-row">
                <div class="col{{ $errors->has('email') ? 'has-error' : '' }}">
                  <label for="email">Email</label>
                  <input type="text" id="email" name="email" class="form-control" aria-describedby="">
                  <label class="login-form-error">{{ $errors->first('email') }}</label>
                </div>
                <div class="col{{ $errors->has('username') ? 'has-error' : '' }}">
                  <label for="username">Login Username</label>
                  <input type="text" id="username" name="username" class="form-control" aria-describedby="">
                  <label class="login-form-error">{{ $errors->first('username') }}</label>
                </div>
              </div>

              <div class="form-row">
                <div class="col{{ $errors->has('password') ? 'has-error' : '' }}">
                  <label for="password">Login Password</label>
                  <input type="password" id="password" name="password" class="form-control" aria-describedby="">
                  <label class="login-form-error">{{ $errors->first('password') }}</label>
                </div>
                <div class="col">
                  <label for="re-password">Re-Password</label>
                  <input type="password" id="re-password" name="re-password" class="form-control" aria-describedby="">
                  <label class="login-form-error">{{ $errors->first('re-password') }}</label>
                </div>
              </div>
              <div class="form-row">
                <div class="form-actions">
                  <button type="submit" class="btn login-form-btn form-signup-btn">Sign Up</button>
                </div>
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
