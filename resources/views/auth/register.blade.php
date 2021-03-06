@extends('frontend.layouts.app')

@section('content')

<!--/////////////////////////////////////////-->
<section class="page_inner innertop_gap">
  <div class="container">
    <div class="row clearfix">
      <div class="col-md-12">
        <div class="login_form">
         
          <form name="user-register" id="user-register" class="login100-form" method="POST" action="{{ route('user.register') }}">
            <span class="login100-form-title">Register</span>
             {{ csrf_field() }}
            <div class="form_box">
                      <div class="form-group">
                        <input type="text" name="username" id="username" placeholder="username*" class="form-control" value="{{ old('username') }}">
                         @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                         @endif
                      </div>
                      <div class="form-group">
                        <input type="text" name="first_name" id="first_name" placeholder="First name*" class="form-control" value="{{ old('first_name') }}">
                         @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                         @endif
                      </div>
                      <div class="form-group">
                        <input type="text" name="last_name" id="last_name" placeholder="Second name*" class="form-control" value="{{ old('last_name') }}">
                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
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
                        <select class="form-control" name="country_code" id="country_code">
                          <option>Country</option>
                          <?php countryOption(''); ?>
                        </select>
                      </div>
             
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                     <input id="password" type="password" placeholder="Password*" class="form-control" name="password" >
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
                
                 <input id="confirm_password" placeholder="Confirm Password*" type="password" class="form-control" name="confirm_password" required>
              </div>
              <div class="form-group">
                <label class="update_txt">
                  <input type="checkbox" name="send_me" id="send_me" value="1">
                  &nbsp;Send me updates and offers</label>
              </div>
              <div class="form_btn">
                <button class="login100-form-btn btn" type="submit">Register</button>
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

@section('script')

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
 /**
 * Custom validator for contains at least one lower-case letter
 */
  jQuery.validator.addMethod("atLeastOneLowercaseLetter", function (value, element) {
      return this.optional(element) || /[a-z]+/.test(value);
  }, "Must have at least one lowercase letter");
   
  /**
   * Custom validator for contains at least one upper-case letter.
   */
  
  jQuery.validator.addMethod("atLeastOneUppercaseLetter", function (value, element) {
      return this.optional(element) || /[A-Z]+/.test(value);
  }, "Must have at least one uppercase letter");
   
  /**
   * Custom validator for contains at least one number.
   */
  jQuery.validator.addMethod("atLeastOneNumber", function (value, element) {
      return this.optional(element) || /[0-9]+/.test(value);
  }, "Must have at least one number");
   
  /**
   * Custom validator for contains at least one symbol.
   */
  $.validator.addMethod("atLeastOneSymbol", function (value, element) {
    return this.optional(element) || /[!@#$%^&*()]+/.test(value);
  }, "Must have at least one symbol");

  jQuery.validator.addMethod("phoneno", function(phone_number, element) {
          phone_number = phone_number.replace(/\s+/g, "");
          return this.optional(element) || phone_number.length > 9 && 
          phone_number.match(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/);
    }, "<br />Please specify a valid phone number");
    $('form[id="user-register"]').validate({
      rules: {
        username: 'required',
        first_name: 'required',
        last_name: 'required',
        "email":
          {  required:true,
          },
        password: {
              required: true,
              atLeastOneLowercaseLetter: true,
              atLeastOneUppercaseLetter: true,
              atLeastOneNumber: true,
              atLeastOneSymbol: true,
              minlength: 8,
              maxlength: 40
        },
         confirm_password: {
          equalTo: "#password"
        },
        send_me: {
          required: true,
        }
       
      },
      messages: {
        username: 'This username is required',
        first_name: 'This First name is required',
        last_name: 'This Last name is required',
        email: 'This email is required',
         password: {
          minlength: 'Password must be at least 8 characters long'
        },
        confirm_password: {
          equalTo: ' Please enter the same password again. '
        },
        send_me: 'This Last name is required',
      },
      submitHandler: function(e) {
        e.preventDefault();
        var $this = $("form#update_profile .btn");
        $this.button('loading');
        $('form[id="user-register"]').submit();
      }
  });

</script>
  
@endsection
