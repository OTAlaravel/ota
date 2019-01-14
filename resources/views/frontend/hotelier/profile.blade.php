@extends('frontend.layouts.app')
@section('content')
<!--Banner sec-->
<?php $user = auth('web')->user();   ?>
<section class="profile dashboard hometop_gap">
    @include('frontend.layouts.hotelier_sidenav')
      <div class="dashboard_content">
        <h1>My profile</h1>

            <div class="row">
              <div class="col-md-12 col-lg-12">
                      <h2 class="control-label">Update profile</h2>
                </div>
               <form id="update_profile" name="update_profile" method="post">
               <input type="hidden" value="{{$user->id}}" name="user_id">
                <div class="col-md-6 col-lg-6">
                   <div class="form-group">
                      <label class="control-label">First Name</label>
							         <div class="input-group">
								        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								        <input type="text" name ="first_name" class="form-control" value="{{$user->first_name}}" />
							       </div>
						      </div>
                </div>

                <div class="col-md-6 col-lg-6">
                  <div class="form-group">
							     <label class="control-label">Last Name</label>
							     <div class="input-group">
								    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								      <input type="text" name ="last_name" class="form-control" value="{{$user->last_name}}" />
							     </div>
                   </div>
                </div>

                 <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label class="control-label">Email</label>
                       <div class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                         <input type="email" name="email" class="form-control" disabled="disabled" value="{{$user->email}}" />
                      </div>
                    </div>
                  </div>

                 <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label class="control-label">Mobile</label>
                       <div class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                         <input type="text"  name="mobile_number" class="form-control" />
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6 col-lg-6">
                   <div class="form-group">
                      <label class="control-label">Address</label>
                       <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name ="first_name" class="form-control" />
                     </div>
                  </div>
                </div>

                 <div class="col-md-6 col-lg-6">
                  <div class="form-group">
                   <label class="control-label">Select Country</label>
                     <select class="form-control">
                        <?php countryOption($id='');?>
                     </select>
                    </div>
                 </div>

                 <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                        <label class="control-label">Date Of Birth</label>
                          <div class="input-group date">
                                <input name="dob" class="form-control" type="text" />
                               <span class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button></span>
                            </div>
                        </div>
                  </div>
                <div class="col-md-12 col-lg-12">
                  <button type="button" class="btn btn-primary btn-lg" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Updating now ">Submit</button>
                </div>
                </form>

                <div class="col-md-12 col-lg-12">
                      <h2 class="control-label">Change password</h2>
                </div>

                 <form id="change_password" name="change_password" method="post">
                  <input type="hidden" value="" name="user_id">
                  <div class="col-md-6 col-lg-6">
                   <div class="form-group">
                      <label class="control-label">New password</label>
                       <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name ="first_name" class="form-control" />
                     </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-6">
                  <div class="form-group">
                   <label class="control-label">Confirm password</label>
                   <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" name ="last_name" class="form-control" />
                   </div>
                   </div>
                </div>
                 <div class="col-md-12 col-lg-12">
                    <button type="button" class="btn btn-primary btn-lg" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Updating now ">Submit</button>
                 </div>
                </form>
              </div> 
            </div>
					</div>
				</div>
		</div>
					  
					 
</section>
<div class="clearfix"></div>

@endsection

@section('script')

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("form#update_profile .btn").click(function(e){
        var $this = $(this);
        $this.button('loading');
        e.preventDefault();
        var name = $("input[name=name]").val();
        var password = $("input[name=password]").val();
        var email = $("input[name=email]").val();
        $.ajax({
           type:'POST',
           url:"{{route('ajax.profile.update')}}",
           data:{name:name, password:password, email:email},
           success:function(data){
              //alert(data.success);
              setTimeout(function() {
                alert(data.success);
                 $this.button('reset');
             }, 2000);

           }

        });
  });


  $("form#change_password .btn").click(function(e){
        var $this = $(this);
        $this.button('loading');
        e.preventDefault();
        var name = $("input[name=name]").val();
        var password = $("input[name=password]").val();
        var email = $("input[name=email]").val();
        $.ajax({
           type:'POST',
           url:"{{route('ajax.profile.update')}}",
           data:{name:name, password:password, email:email},
           success:function(data){
              //alert(data.success);
              setTimeout(function() {
                alert(data.success);
                 $this.button('reset');
             }, 2000);

           }

        });
  });

</script>
  
@endsection

