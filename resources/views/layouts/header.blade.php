<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Navbar Area -->
    <div class="palatin-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="palatinNav">

                    <!-- Nav brand -->
                    <div class="d-flex justify-content-center">
                        <a href="index.html" class="nav-brand"><img src="{{ asset('icon.png') }}" alt="" style="width: 50px;border-radius: 20%"><span class="text-white ml-3 d-none d-md-inline">Panorama Cottages 1</span></a>
                        
                    </div>
                    
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{ route('index') }}">Home</a></li>
                                <li class="{{ request()->routeIs('rooms') ? 'active' : '' }}"><a href="{{ route('rooms') }}">Rooms</a></li>
                                <li class="{{ request()->routeIs('about-us') ? 'active' : '' }}"><a href="{{ route('about-us') }}">About Us</a></li>
                                <li class="{{ request()->routeIs('services') ? 'active' : '' }}"><a href="{{ route('services') }}">Services</a></li>
                                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>

                            <!-- Button -->
                            <div class="menu-btn">
                                <a href="#" class="btn palatin-btn">Make a Reservation</a>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->