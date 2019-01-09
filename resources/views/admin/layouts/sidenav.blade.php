 <div class="sidebar" data-color="green" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo">
        <a href="/" class="simple-text logo-normal">
            OTA
        </a>
    </div>

    <div class="sidebar-wrapper">

        <ul class="nav">

       

            <!-- Dashboard -->
            <li class="nav-item {{ Request::is('admin') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>

            <!-- Posts -->
            <li class="nav-item {{ Request::is('admin/posts*') ? 'active' : '' }}  ">
                <a class="nav-link" href="{{ route('admin.posts') }}">
                    <i class="material-icons">library_books</i>
                    <p>Posts management</p>
                </a>
            </li>

            <!-- Pages -->
            <li class="nav-item {{ Request::is('admin/pages*') ? 'active' : '' }}  ">
                <a class="nav-link" href="{{ route('admin.pages') }}">
                    <i class="material-icons">library_books</i>
                    <p>Pages management</p>
                </a>
            </li>

            <!-- Banners -->
            <li class="nav-item {{ Request::is('admin/banners*') ? 'active' : '' }}  ">
                <a class="nav-link" href="{{ route('admin.banners') }}">
                    <i class="material-icons">slideshow</i>
                    <p>Banners management</p>
                </a>
            </li>

            <!-- Hotels -->
            <li class="nav-item {{ Request::is('admin/hotels*') ? 'active' : '' }}  ">
                <a class="nav-link" href="{{ route('admin.hotels') }}">
                    <i class="material-icons">store</i>
                    <p>All Hotels</p>
                </a>
            </li>

            {{--  <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
              <i class="material-icons">image</i>
              <p> Pages
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/pages/pricing.html">
                    <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Pricing </span>
                  </a>
                </li>
               
              </ul>
            </div>
          </li> --}}
            <!-- Masters -->
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#masters" >
                    <i class="material-icons">library_books</i>
                    <p>All Masters
                  <b class="caret"></b>
                  </p>
                </a>
                <div class="collapse" id="masters">
                	<ul class="nav">
                		<li class="nav-item {{ Request::is('admin/countries*') ? 'active' : '' }}">
                			<a href="{{ route('admin.countries') }}" class="nav-link">Country<i class="material-icons">fiber_manual_record</i>
                            
                            </a>
                		</li>
                		<li class="nav-item {{ Request::is('admin/states*') ? 'active' : '' }}">
                			<a href="{{ route('admin.states') }}" class="nav-link">State<i class="material-icons">fiber_manual_record</i></a>
                		</li>
                		<li class="nav-item {{ Request::is('admin/accommodations*') ? 'active' : '' }}">
                			<a href="{{ route('admin.accommodations') }}" class="nav-link">Accommodations<i class="material-icons">fiber_manual_record</i></a>
                		</li>
                		<li class="nav-item {{ Request::is('admin/species*') ? 'active' : '' }}">
                			<a href="{{ route('admin.species') }}" class="nav-link">Species<i class="material-icons">fiber_manual_record</i></a>
                		</li>
                        <li class="nav-item {{ Request::is('admin/inspirations*') ? 'active' : '' }}">
                            <a href="{{ route('admin.inspirations') }}" class="nav-link">Inspirations<i class="material-icons">fiber_manual_record</i></a>
                        </li>
                        <li class="nav-item {{ Request::is('admin/experiences*') ? 'active' : '' }}">
                            <a href="{{ route('admin.experiences') }}" class="nav-link">Experiences<i class="material-icons">fiber_manual_record</i></a>
                        </li>
                        <li class="nav-item {{ Request::is('admin/regions*') ? 'active' : '' }}">
                            <a href="{{ route('admin.regions') }}" class="nav-link">Regions<i class="material-icons">fiber_manual_record</i></a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Users -->
            <li class="nav-item {{ Request::is('admin/users*') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('admin.users') }}">
                    <i class="material-icons">person</i>
                    <p>Users management</p>
                </a>
            </li>

            <!-- Testimonials -->
            <li class="nav-item {{ Request::is('admin/testimonials*') ? 'active' : '' }}  ">
                <a class="nav-link" href="{{ route('admin.testimonials') }}">
                    <i class="material-icons">speaker_notes</i>
                    <p>Testimonials management</p>
                </a>
            </li>
        </ul>
    </div>
</div>