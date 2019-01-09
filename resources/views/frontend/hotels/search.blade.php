@extends('frontend.layouts.app')
@section('content')

<!--/////////////////////////////////////////-->
<section class="search_result_section">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1>Kolkata, India 97 of 174 properties available</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="selectbox">
          <select>
            <option>Sort By Curators Rating (recommended)</option>
            <option >A</option>
            <option >B</option>
            <option >C</option>
            <option >D</option>
          </select>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
        <div class="selectbox">
          <select>
            <option>Show : 10</option>
            <option>Show : 1</option>
            <option>Show : 2</option>
            <option>Show : 3</option>
            <option>Show : 4</option>
          </select>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 selectbox2">
        <div class="selectbox">
          <select>
            <option>Currency (egAU$)</option>
            <option >A</option>
            <option >B</option>
            <option >C</option>
            <option >D</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="holidaysection">
          <div class="holidayimg">
            <div class="holidaybox">
              <div class="mapbox"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> </a> </div>
              <div class="heartbox"> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> </a> </div>
            </div>
            <img src="{{ asset('frontend') }}/images/img_1.jpg" alt=""></div>
          <div class="holidaytex">
            <div class="Travellerbox1">
              <h2>Holiday Lodge </h2>
              <p><span> <i class="fa fa-map-marker" aria-hidden="true"></i> </span> Jackson, Montana, United States</p>
              <p>Comfortable rooms with balconies overlooking Lake Jackson ..<a href="#">more</a></p>
              <a href="#" class="Curatorbox">Curator’s Rating <strong>90</strong>/100</a>
              <ul>
                <li><img src="{{ asset('frontend') }}/images/img_4.png" alt=""> Fishing Season</li>
                <li><img src="{{ asset('frontend') }}/images/img_5.png" alt=""> Fishing Services</li>
                <li><img src="{{ asset('frontend') }}/images/img_6.png" alt=""> Species</li>
              </ul>
            </div>
            <div class="Travellerbox2">
              <div class="starbox"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
              <p>Traveller’s Rating</p>
              <p><a href="#">300 reviews</a> </p>
              <h6>$5000</h6>
              <p>Per Night (Inc. Tax)</p>
              <a href="#" class="Viewbox">View</a> 
                        <div class="clearfix"></div>
              </div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>
        
        <div class="holidaysection">
          <div class="holidayimg">
            <div class="holidaybox">
              <div class="mapbox"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> </a> </div>
              <div class="heartbox"> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> </a> </div>
            </div>
            <img src="{{ asset('frontend') }}/images/img_2.jpg" alt=""></div>
          <div class="holidaytex">
            <div class="Travellerbox1">
              <h2>Holiday Lodge </h2>
              <p><span> <i class="fa fa-map-marker" aria-hidden="true"></i> </span> Jackson, Montana, United States</p>
              <p>Comfortable rooms with balconies overlooking Lake Jackson ..<a href="#">more</a></p>
              <a href="#" class="Curatorbox">Curator’s Rating <strong>90</strong>/100</a>
              <ul>
                <li><img src="{{ asset('frontend') }}/images/img_4.png" alt=""> Fishing Season</li>
                <li><img src="{{ asset('frontend') }}/images/img_5.png" alt=""> Fishing Services</li>
                <li><img src="{{ asset('frontend') }}/images/img_6.png" alt=""> Species</li>
              </ul>
            </div>
            <div class="Travellerbox2">
              <div class="starbox"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
              <p>Traveller’s Rating</p>
              <p><a href="#">300 reviews</a> </p>
              <h6>$5000</h6>
              <p>Per Night (Inc. Tax)</p>
              <a href="#" class="Viewbox">View</a>
                        <div class="clearfix"></div>
                </div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>        
        
        <div class="holidaysection">
          <div class="holidayimg">
            <div class="holidaybox">
              <div class="mapbox"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> </a> </div>
              <div class="heartbox"> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> </a> </div>
            </div>
            <img src="{{ asset('frontend') }}/images/img_3.jpg" alt=""></div>
          <div class="holidaytex">
            <div class="Travellerbox1">
              <h2>Holiday Lodge </h2>
              <p><span> <i class="fa fa-map-marker" aria-hidden="true"></i> </span> Jackson, Montana, United States</p>
              <p>Comfortable rooms with balconies overlooking Lake Jackson ..<a href="#">more</a></p>
              <a href="#" class="Curatorbox">Curator’s Rating <strong>90</strong>/100</a>
              <ul>
                <li><img src="{{ asset('frontend') }}/images/img_4.png" alt=""> Fishing Season</li>
                <li><img src="{{ asset('frontend') }}/images/img_5.png" alt=""> Fishing Services</li>
                <li><img src="{{ asset('frontend') }}/images/img_6.png" alt=""> Species</li>
              </ul>
            </div>
            <div class="Travellerbox2">
              <div class="starbox"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
              <p>Traveller’s Rating</p>
              <p><a href="#">300 reviews</a> </p>
              <h6>$5000</h6>
              <p>Per Night (Inc. Tax)</p>
              <a href="#" class="Viewbox">View</a>
                        <div class="clearfix"></div>
                </div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>           
        
        </div>
    </div>
  </div>
</section>
<!--/////////////////////////////////////////-->

@endsection
