<!-- header_middle-sec -->
<div class="headerMain" id="headerfixed">
<section class="header_middle">
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-3 col-sm-2 header_fish">
      <div class="header_logo1"><img src="{{ asset('frontend/images/fish_header_img.png') }}" alt="" /> </div>
    </div>
    <div class="col-md-6 col-sm-6 header_logo">
      <div class="header_logo"> <a href="{{ url('/') }}"><img src="{{ asset('frontend/images/logo.png') }}" alt="" /></a>
        <h3>the world's best & most luxurious fishing destinations</h3>
      </div>
    </div>
    <div class="col-md-3 col-sm-4 header_top_right">
      <div class="header_top_right_inner">
        <ul class="list_header_account">
          <!--<li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                          Language <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li> <a href="">Dashboard</a> </li>
                      <li> <a href="">My profile </a> </li>
                      <li> <a href="">Logout </a> </li>
                  </ul>
          </li> -->
              @guest
                 <li><a href="{{ route('login') }}">Sign In</a></li>
                 <!--<li><a href="{{ route('register') }}">Register</a></li> -->
               @else
                   <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                          {{ Auth::user()->username}} <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                           <li> <a href="{{ route('user.dashboard') }}">Dashboard</a> </li>
                           <li> <a href="{{ route('user.profile') }}">My profile </a> </li>
                           <li> <a href="{{ route('user.logout') }}">Logout </a> </li>
                        </ul>
                  </li>
              @endguest
          <li class="head_heart_icon"><a href=""><i class="fa fa-heart" aria-hidden="true"></i></a></li>
        </ul>
       </div>
     </div>
   </div>
  </div>
</section>

<!-- Navigation Sec-->
<section class="navigation_sec" id="sticky-wrap">
  <div class="container">
    <div class="navigation_area"> 
      <div class="wsmenucontainer clearfix">
        <div class="overlapblackbg"></div>
        <div class="wsmobileheader clearfix"> <a id="wsnavtoggle" class="animated-arrow" title="Open menu"><span></span></a> <a class="smallogo" title="Small Logo"><img src="images/logo.png" width="170" alt=""  /></a>
          <p class="mobile_header_tagline">The world's best & most luxurious fishing destinations</p>
          <!--<a class="callusicon" href="tel:123456789" title="Call us"><span class="fa fa-phone"></span></a>-->
          <ul class="list_mobile_header">
            <li><a href=""><span class="fa fa-heart-o"></span></a></li>
            <!--<li><a href=""><span class="fa fa-phone"></span></a></li>-->
          </ul>
        </div>

        <header>
          <div class="container">
            <div class="header-content bigmegamenu clearfix"> 
              <!--<div class="logo"><a href="#" title="Web Slide Bootstrap Mega Menu"><img src="images/logo.png" alt="Logo"></a></div>-->
              <nav class="wsmenu slideLeft clearfix">
                <div class="mobile_menu_area">
                  <div class="mobile_menu_logo"> <a href="index.html"><img src="{{ asset('frontend/images/menu_logo.png') }}" width="190px" alt=""  /></a> </div>
                  <ul>
                    <li><a href="">Step Aboard</a></li>
                    <li><a href="">Sign In</a></li>
                  </ul>
                </div>
               <?php echo get_header_navigation('mobile-sub wsmenu-list','xyz'); ?>
              </nav>
            </div>
          </div>
        </header>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>

<?php if(Request::segment(1)!='users'){ ?>
<form id="desk_search" action="{{route('hotels.search')}}" method="get">
  <div class="header_search_sec" id="desktop_search">
    <div class="container">
      <div class="header_search_area">
        <div class="form_box_large search_box_comman">
          <div class="header_search">
            <input type="text" class="header_search_txt" placeholder="Search..">
            <button type="submit" class="search-btn22"><img src="{{ asset('frontend/images/search_icon_head.png') }}" alt="" /></button>
          </div>
        </div>
        <div class="form_box_medium search_box_comman">
          <div class="t-datepicker">
            <div class="t-check-in">
              <input type="text" class="" >
            </div>
            <div class="t-check-out">
              <input type="text" class="" >
            </div>
          </div>
        </div>
        <div class="form_box_small search_box_comman">
          <div class="input-group adult_input"> <span class="input-group-btn">
            <button type="button" class="quantity-left-minus btn btn-number"  data-type="minus" data-field=""> <span class="glyphicon glyphicon-minus"></span> </button>
            </span>
            <div class="quantity_inp quantity_inp_adult">
              <input type="text" id="quantity" name="quantity" class="form-control input-number" value="2 Adult" min="1" max="100">
              <!--<label for="adults" class="adult_input_label">adults</label>--> 
            </div>
            <span class="input-group-btn">
            <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field=""> <span class="glyphicon glyphicon-plus"></span> </button>
            </span> </div>
        </div>
        <div class="form_box_small_children search_box_comman form_box_child">
          <div class="input-group adult_input"> <span class="input-group-btn">
            <button type="button" class="quantity-left-minus-child btn btn-danger btn-number"  data-type="minus" data-field=""> <span class="glyphicon glyphicon-minus"></span> </button>
            </span>
            <div class="quantity_inp quantity_inp_child">
              <input type="text" id="quantity_child" name="quantity_child" class="form-control input-number" value="0 Children" min="1" max="100">
              <!--<label for="adults" class="adult_input_label">adults</label>--> 
            </div>
            <span class="input-group-btn">
            <button type="button" class="quantity-right-plus-child btn btn-success btn-number" data-type="plus" data-field=""> <span class="glyphicon glyphicon-plus"></span> </button>
            </span> </div>
        </div>
        <div class="search_btn_b">
          <button type="submit" class="f_submit_btn">Search</button>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  </form>

  <!-- mobile_search_sec -->
  <form  id="mob_search"  action="{{route('hotels.search')}}" method="get">
    <div class="mobile_search_sec" id="mobile_search">
    <div class="container">
      <div class="mobile_search_area">
        <div class="mobile_search_big"> 
          <!--<input type="text" class="form-control mob_search_txt" placeholder="" id="search_toggle_open">-->
          <div class="mob_search_txt" id="search_toggle_open">
            <p><img src="{{ asset('frontend/images/search_icon_head.png') }}" alt=""> Search for your perfect hotel or villa…</p>
            <div class="mob_search_icon">
              <ul>
                <li><a href="javascript:void(0)"><img src="{{ asset('frontend/images/icon_checkin_calendar.png') }}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{ asset('frontend/images/adult_icon.png') }}" alt=""> 2</a></li>
                <li><a href="javascript:void(0)"><img src="{{ asset('frontend/images/children_icon.png') }}" alt=""> 0</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="mob_search_open_bg bgg">
      <div class="container"> 
        <!-- mobile_search_form_area -->
        <div class="mobile_search_form_area" id="mobile_search_area_toggle">
        
          <div class="header_search_area">
            <div class="form_box_large search_box_comman">
              <div class="header_search">
                <input type="text" class="header_search_txt" placeholder="Search..">
                <button type="submit" class="search-btn22"><img src="{{ asset('frontend/images/search_icon_head.png') }}" alt="" /></button>
              </div>
            </div>
            <div class="form_box_medium search_box_comman">
              <div class="t-datepicker">
                <div class="t-check-in">
                  <input type="text" class="" >
                </div>
                <div class="t-check-out">
                  <input type="text" class="" >
                </div>
              </div>
            </div>
            <div class="form_box_small search_box_comman">
              <div class="input-group adult_input"> <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn btn-number"  data-type="minus" data-field=""> <span class="glyphicon glyphicon-minus"></span> </button>
                </span>
                <div class="quantity_inp quantity_inp_adult">
                  <input type="text" id="quantity_mobile" name="quantity_mobile" class="form-control input-number" value="2 Adult" min="1" max="100">
                  <!--<label for="adults" class="adult_input_label">adults</label>--> 
                </div>
                <span class="input-group-btn">
                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field=""> <span class="glyphicon glyphicon-plus"></span> </button>
                </span> </div>
            </div>
            <div class="form_box_small_children search_box_comman form_box_child">
              <div class="input-group adult_input"> <span class="input-group-btn">
                <button type="button" class="quantity-left-minus-child btn btn-danger btn-number"  data-type="minus" data-field=""> <span class="glyphicon glyphicon-minus"></span> </button>
                </span>
                <div class="quantity_inp quantity_inp_child">
                  <input type="text" id="quantity_child_mobile" name="quantity_child_mobile" class="form-control input-number" value="0 Children" min="1" max="100">
                  <!--<label for="adults" class="adult_input_label">adults</label>--> 
                </div>
                <span class="input-group-btn">
                <button type="button" class="quantity-right-plus-child btn btn-success btn-number" data-type="plus" data-field=""> <span class="glyphicon glyphicon-plus"></span> </button>
                </span> </div>
            </div>
            <div class="search_btn_b">
              <button type="submit" class="f_submit_btn">Search</button>
            </div>
            <div class="clearfix"></div>
          </div>
      
        </div>
      </div>
    </section>
  </div>
  </form>
  <?php } ?>
  </section>
<!--/////////////////////////////////////////-->
</div>