@extends('frontend.layouts.app')
@section('content')

<!--/////////////////////////////////////////-->
<section class="hotel_details_section">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">Amenities</a></li>
          <li><a data-toggle="tab" href="#menu1">Fishing</a></li>
          <li><a data-toggle="tab" href="#menu2">Other Activities</a></li>
          <li><a data-toggle="tab" href="#menu3">Location & Directions</a></li>
          <li><a data-toggle="tab" href="#menu4">Reviews</a></li>
        </ul>
        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <div class="tab-pane1">
              <h6>Holiday Lodge <span> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star-half-o"></i> <i aria-hidden="true" class="fa fa-star-o"></i> <i aria-hidden="true" class="fa fa-star-o"></i> </span></h6>
              <h5><span> <i aria-hidden="true" class="fa fa-map-marker"></i> </span> Jackson, Montana, United States <a class="Showbox" href="#">-Show Map</a> </h5>
              <div> 
                
                <!-- Place somewhere in the <body> of your page -->
                <div id="slider" class="flexslider">
                  <ul class="slides">
                    <li> <a href="{{ asset('frontend') }}/images/flexslider/large/image1.jpg" rel="prettyPhoto[pp_gal]"><img src="images/flexslider/large/image1.jpg" alt=""></a></li>
                    <li> <a href="{{ asset('frontend') }}/images/flexslider/large/image2.jpg" rel="prettyPhoto[pp_gal]"><img src="images/flexslider/large/image2.jpg" alt=""></a></li>
                    <li> <a href="{{ asset('frontend') }}/images/flexslider/large/image3.jpg" rel="prettyPhoto[pp_gal]"><img src="images/flexslider/large/image3.jpg" alt=""></a></li>
                    <li> <a href="{{ asset('frontend') }}/images/flexslider/large/image4.jpg" rel="prettyPhoto[pp_gal]"><img src="images/flexslider/large/image4.jpg" alt=""></a></li>
                    <li> <a href="{{ asset('frontend') }}/images/flexslider/large/image5.jpg" rel="prettyPhoto[pp_gal]"><img src="images/flexslider/large/image5.jpg" alt=""></a></li>
                    <li> <a href="{{ asset('frontend') }}/images/flexslider/large/image6.jpg" rel="prettyPhoto[pp_gal]"><img src="images/flexslider/large/image6.jpg" alt=""></a></li>
                    <li> <a href="{{ asset('frontend') }}/images/flexslider/large/image7.jpg" rel="prettyPhoto[pp_gal]"><img src="images/flexslider/large/image7.jpg" alt=""></a></li>
                    <li> <a href="{{ asset('frontend') }}/images/flexslider/large/image8.jpg" rel="prettyPhoto[pp_gal]"><img src="images/flexslider/large/image8.jpg" alt=""></a></li>
                    <li> <a href="{{ asset('frontend') }}/images/flexslider/large/image9.jpg" rel="prettyPhoto[pp_gal]"><img src="images/flexslider/large/image9.jpg" alt=""></a></li>
                    <li> <a href="{{ asset('frontend') }}/images/flexslider/large/image10.jpg" rel="prettyPhoto[pp_gal]"><img src="images/flexslider/large/image10.jpg" alt=""></a></li>
                    <li> <a href="{{ asset('frontend') }}/images/flexslider/large/image11.jpg" rel="prettyPhoto[pp_gal]"><img src="images/flexslider/large/image11.jpg" alt=""></a></li>
                    
                    <!-- items mirrored twice, total of 12 -->
                  </ul>
                </div>
                <div  class="carousel flexslider">
                  <ul class="slides">
                    <li> <img src="{{ asset('frontend') }}/images/flexslider/thumbel/image1.jpg" /> </li>
                    <li> <img src="{{ asset('frontend') }}/images/flexslider/thumbel/image2.jpg" /> </li>
                    <li> <img src="{{ asset('frontend') }}/images/flexslider/thumbel/image3.jpg" /> </li>
                    <li> <img src="{{ asset('frontend') }}/images/flexslider/thumbel/image4.jpg" /> </li>
                    <li> <img src="{{ asset('frontend') }}/images/flexslider/thumbel/image5.jpg" /> </li>
                    <li> <img src="{{ asset('frontend') }}/images/flexslider/thumbel/image6.jpg" /> </li>
                    <li> <img src="{{ asset('frontend') }}/images/flexslider/thumbel/image7.jpg" /> </li>
                    <li> <img src="{{ asset('frontend') }}/images/flexslider/thumbel/image8.jpg" /> </li>
                    <li> <img src="{{ asset('frontend') }}/images/flexslider/thumbel/image9.jpg" /> </li>
                    <li> <img src="{{ asset('frontend') }}/images/flexslider/thumbel/image10.jpg" /> </li>
                    <li> <img src="{{ asset('frontend') }}/images/flexslider/thumbel/image11.jpg" /> </li>
                    
                    <!-- items mirrored twice, total of 12 -->
                  </ul>
                </div>
              </div>
              <h4>$5000</h4>
              <a class="BookNow" href="#">Book Now</a> </div>
            <div class="tab-pane1">
              <h3>Things we like about Hotel Lilawati Grand</h3>
              <p>Based on our personal experience, Hotel Lilawati Grand scores highly in our Curator’s Rating under all of our quality, service & experience criteria and achieved special inclusion in our favourites categories  : </p>
              <div class="thingsbox">
                <ul>
                  <li>Our Best Saltwater Destinations</li>
                  <li>Fine Dining</li>
                  <li>Quirky Favourites</li>
                  <li>Our Best Freshwater Destinations</li>
                  <li>Luxury Spa </li>
                  <li>Beautiful Beach</li>
                </ul>
              </div>
            </div>
            <div class="tab-pane1">
              <h3>Location & Directions</h3>
              <div>
                <div class="MAPbox1">
                  <h2>MAP</h2>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14736.725502421743!2d88.46668536977539!3d22.57231870000001!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1545299981025" width="100%" height="212" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="MAPbox2">
                  <div class="box1">
                    <h2>TRANSFERS</h2>
                    <ul>
                      <li><img src="{{ asset('frontend') }}/images/Road.png" alt=""> Road</li>
                      <li><img src="{{ asset('frontend') }}/images/Train.png" alt=""> Train</li>
                      <li><img src="{{ asset('frontend') }}/images/Helicopter.png" alt=""> Helicopter</li>
                    </ul>
                  </div>
                  <div class="box1">
                    <h2>Nearest airport</h2>
                    <ul>
                      <li><img src="{{ asset('frontend') }}/images/Butte.png" alt=""> Butte</li>
                    </ul>
                  </div>
                  <div class="box1">
                    <h2>Distance</h2>
                    <ul>
                      <li><img src="{{ asset('frontend') }}/images/kMS.png" alt=""> 17kMS</li>
                    </ul>
                  </div>
                  <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <div id="menu1" class="tab-pane fade">
            <h6>Fishing</h6>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
          <div id="menu2" class="tab-pane fade">
            <h6>Other Activities</h6>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
          <div id="menu3" class="tab-pane fade">
            <h6>Location & Directions</h6>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
          <div id="menu4" class="tab-pane fade">
            <h6>Reviews</h6>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/////////////////////////////////////////-->

@endsection
