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

            <li class="nav-item {{ Request::is('admin/pages*') ? 'active' : '' }}  ">
                <a class="nav-link" href="{{ route('admin.pages') }}">
                    <i class="material-icons">library_books</i>
                    <p>Pages management</p>
                </a>
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

                  <!--  <li class="nav-item ">
                       <a class="nav-link" href="../examples/user.html">
                           <i class="material-icons">person</i>
                           <p>User Profile</p>
                       </a>
                   </li> -->

                   <!-- <li class="nav-item ">
                        <a class="nav-link" href="../examples/table.html">
                            <i class="material-icons">content_paste</i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../examples/typography.html">
                            <i class="material-icons">library_books</i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../examples/icons.html">
                            <i class="material-icons">bubble_chart</i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../examples/maps.html">
                            <i class="material-icons">location_ons</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../examples/notifications.html">
                            <i class="material-icons">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>  -->

                </ul>
            </div>
        </div>