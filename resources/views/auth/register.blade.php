@extends('frontend.layouts.app')

@section('content')

<!--/////////////////////////////////////////-->
<section class="page_inner innertop_gap">
  <div class="container">
    <div class="row clearfix">
      <div class="col-md-12">
        <div class="login_form">
         
          <form class="login100-form" method="POST" action="{{ route('register') }}">
            <span class="login100-form-title">Register</span>
             {{ csrf_field() }}
            <div class="form_box">
                      <div class="form-group">
                        <input type="text" name="first_name" id="first_name" placeholder="First name*" class="form-control">
                         @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                      </div>
                      <div class="form-group">
                        <input type="text" name="last_name" id="last_name" placeholder="Second name*" class="form-control">
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                      </div>
              
                       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="username" type="text" placeholder="Username*" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif                       
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" placeholder="Email address*" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        
                      <div class="form-group">
                        <select class="form-control">
                          <option selected>Country</option>
                          <option>Country1</option>
                          <option>Country2</option>
                          <option>Country3</option>
                          <option>Country4</option>
                          <option>Country5</option>
                          <option>Country6</option>
                          <option>Country7</option>
                        </select>
                      </div>
             
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" placeholder="Password*" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>

              <div class="form-group">
                <p class="c-form__instruction">Your password must have at least eight characters and feature one special character, one capital letter, one number and one lower-case letter.</p>
              </div>

              <div class="form-group">
                
                 <input id="password-confirm" placeholder="Confirm Password*" type="password" class="form-control" name="password_confirmation" required>
              </div>
              <div class="form-group">
                <label class="update_txt">
                  <input type="checkbox">
                  &nbsp;Send me updates and offers</label>
              </div>
              <div class="form_btn">
                <button class="login100-form-btn" type="submit">Register</button>
              </div>
              <div class="txt1"> <span>Already a member?</span> <a href="{{ route('login') }}">Login</a> </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/////////////////////////////////////////-->

@endsection
