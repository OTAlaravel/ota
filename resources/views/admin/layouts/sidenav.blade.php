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

            <!-- Masters -->
            <li class="nav-item">
                <a class="nav-link" id ="flip" href="javascript:void(0);">
                    <i class="material-icons">library_books</i>
                    <p>All Masters</p>
                    <i class="material-icons arrow_icon">keyboard_arrow_right</i>
                </a>
                <div id="panel">
                	<ul class="panel_sub">
                		<li class="nav-item {{ Request::is('admin/countries*') ? 'active' : '' }}">
                			<a href="{{ route('admin.countries') }}">Country<i class="material-icons">fiber_manual_record</i></a>
                		</li>
                		<li class="nav-item {{ Request::is('admin/states*') ? 'active' : '' }}">
                			<a href="{{ route('admin.states') }}">State<i class="material-icons">fiber_manual_record</i></a>
                		</li>
                		<li class="nav-item {{ Request::is('admin/accommodations*') ? 'active' : '' }}">
                			<a href="{{ route('admin.accommodations') }}">Accommodations<i class="material-icons">fiber_manual_record</i></a>
                		</li>
                		<li class="nav-item {{ Request::is('admin/species*') ? 'active' : '' }}">
                			<a href="{{ route('admin.species') }}">Species<i class="material-icons">fiber_manual_record</i></a>
                		</li>
                        <li class="nav-item {{ Request::is('admin/inspirations*') ? 'active' : '' }}">
                            <a href="{{ route('admin.inspirations') }}">Inspirations<i class="material-icons">fiber_manual_record</i></a>
                        </li>
                        <li class="nav-item {{ Request::is('admin/experiences*') ? 'active' : '' }}">
                            <a href="{{ route('admin.experiences') }}">Experiences<i class="material-icons">fiber_manual_record</i></a>
                        </li>
                        <li class="nav-item {{ Request::is('admin/regions*') ? 'active' : '' }}">
                            <a href="{{ route('admin.regions') }}">Regions<i class="material-icons">fiber_manual_record</i></a>
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