@extends('frontend.layouts.app')
@section('content')
<!--Banner sec-->



<section class="profile dashboard hometop_gap">
                     @include('frontend.layouts.hotelier_sidenav')
    
                      <div class="dashboard_content">

                                <h1>Bookings</h1>

                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                        <label class="control-label">First Name</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" />
              </div>
            </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
              <label class="control-label">Last Name</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" />
              </div>
                      </div>
                    </div>
          <div class="col-md-6 col-lg-6">
                        <div class="form-group">
              <label class="control-label">Select State</label>
              <select class="form-control">
                  <optgroup label="India">
                  <option value="volvo">Westbengal</option>
                  <option value="saab">Bihar</option>
                  </optgroup>
                  <optgroup label="USA">
                  <option value="volvo">Phoenix</option>
                  <option value="saab">Los Angeles</option>
                  </optgroup>
              </select>
                    </div>
          </div>
                    
                    <div class="col-md-6 col-lg-6">
                       <div class="form-group">
              <label class="control-label">Email</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="text" class="form-control" />
              </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                         <div class="form-group">
                            <label class="control-label">Date Of Birth</label>
                            <div class="input-group date">
                                <input class="form-control" type="text" />
                               <span class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <label class="control-label">I recommend this candidate:</label>

                        <label class="control-label">
                            <input type="checkbox" >
                            With Reservation
                        </label>

                    </div>

                    <hr />
                </div>
            </div>


                   </div>
                  </div>
                </div>
            
           
</section>
<div class="clearfix"></div>

@endsection
