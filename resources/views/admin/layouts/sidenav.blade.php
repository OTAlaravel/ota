 <div class="sidebar" data-color="green" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo">
        <a href="/" class="simple-text logo-normal">
            OTA
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('admin') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item {{ Request::is('admin/users*') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('admin.users') }}">
                    <i class="material-icons">person</i>
                    <p>User management</p>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" id ="flip" href="javascript:void(0);">
                    <i class="material-icons">library_books</i>
                    <p>Masters</p>
                    <i class="material-icons arrow_icon">keyboard_arrow_right</i>
                </a>
                <div id="panel">
                	<ul class="panel_sub">
                		<li class="nav-item {{ Request::is('admin/countries*') ? 'active' : '' }}">
                			<i class="material-icons">fiber_manual_record</i>
                			<a href="{{ route('admin.countries') }}">Country</a>
                		</li>
                		<li class="nav-item {{ Request::is('admin/states*') ? 'active' : '' }}">
                			<i class="material-icons">fiber_manual_record</i>
                			<a href="{{ route('admin.states') }}">State</a>
                		</li>
                		<li>
                			<i class="material-icons">fiber_manual_record</i>
                			<a href="#">Treeview menu 1</a>
                		</li>
                		<li>
                			<i class="material-icons">fiber_manual_record</i>
                			<a href="#">Treeview menu 1</a>
                		</li>
                	</ul>
                </div>
            </li>

            <li class="nav-item {{ Request::is('admin/pages*') ? 'active' : '' }}  ">
                <a class="nav-link" id ="flip" href="{{ route('admin.pages') }}">
                    <i class="material-icons">library_books</i>
                    <p>Pages management</p>
                </a>
                <div id="panel">Hello world!</div>
            </li>

            <li class="nav-item {{ Request::is('admin/posts*') ? 'active' : '' }}  ">
                <a class="nav-link" href="{{ route('admin.posts') }}">
                    <i class="material-icons">library_books</i>
                    <p>Posts management</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/banners*') ? 'active' : '' }}  ">
                <a class="nav-link" href="{{ route('admin.banners') }}">
                    <i class="material-icons">slideshow</i>
                    <p>Banner management</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/countries*') ? 'active' : '' }}  ">
                <a class="nav-link" href="{{ route('admin.countries') }}">
                    <i class="material-icons">list</i>
                    <p>Country management</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/states*') ? 'active' : '' }}  ">
                <a class="nav-link" href="{{ route('admin.states') }}">
                    <i class="material-icons">list</i>
                    <p>State management</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/testimonials*') ? 'active' : '' }}  ">
                <a class="nav-link" href="{{ route('admin.testimonials') }}">
                    <i class="material-icons">speaker_notes</i>
                    <p>Testimonials management</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/accommodations*') ? 'active' : '' }}  ">
             <a class="nav-link" href="{{ route('admin.accommodations') }}">
                 <i class="material-icons">work</i>
                 <p>Accommodations</p>
             </a>
         </li>
         <li class="nav-item {{ Request::is('admin/species*') ? 'active' : '' }}  ">
             <a class="nav-link" href="{{ route('admin.species') }}">
                 <i class="material-icons">work</i>
                 <p>Species</p>
             </a>
         </li>
         <li class="nav-item {{ Request::is('admin/inspirations*') ? 'active' : '' }}  ">
             <a class="nav-link" href="{{ route('admin.inspirations') }}">
                 <i class="material-icons">work</i>
                 <p>Inspirations</p>
             </a>
         </li>
         <li class="nav-item {{ Request::is('admin/experiences*') ? 'active' : '' }}  ">
             <a class="nav-link" href="{{ route('admin.experiences') }}">
                 <i class="material-icons">work</i>
                 <p>Experiences</p>
             </a>
         </li>
         <li class="nav-item {{ Request::is('admin/hotels*') ? 'active' : '' }}  ">
             <a class="nav-link" href="{{ route('admin.hotels') }}">
                 <i class="material-icons">store</i>
                 <p>Hotels</p>
             </a>
         </li>
         <li class="nav-item {{ Request::is('admin/regions*') ? 'active' : '' }}  ">
             <a class="nav-link" href="{{ route('admin.regions') }}">
                 <i class="material-icons">store</i>
                 <p>Regions</p>
             </a>
         </li>

         
     </ul>
 </div>
</div>