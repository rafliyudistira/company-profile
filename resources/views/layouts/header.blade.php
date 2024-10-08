<style>
    .carousel-caption .btn-get-start {
        font-size: 1rem;
        padding: 10px 20px;
        background-color: #28a745;
        color: white;
        border-radius: 5px;
    }

    .carousel-caption .btn-get-start:hover {
        background-color: #008e21;
    }

    .header .carousel-caption .btn-get-start {
        order: 2;
        margin: 0 15px 0 0;
    }
</style>

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="d-flex align-items-center">
                <img src="assets/img/dash.png" width="175" height="55" alt="">
            </a>
        </div>

        <!-- Navbar -->
        <nav id="navmenu" class="navmenu ms-5"> <!-- Tambahkan margin-left (ms-5) agar tidak terlalu dekat -->
            <ul>
                <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">BERANDA<br></a></li>
                <li class="dropdown"><a href="#"
                        class="{{ Request::is('about') ? 'active' : '' }}"><span>ABOUT</span>
                        <iclass="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About
                                Company</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li>
                <li><a href="courses.html">SERVICES</a></li>
                <li><a href="trainers.html">PROYEK</a></li>
                <li><a href="events.html">CLIENTS</a></li>
                <li><a href="pricing.html">KARIR</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="contact.html">NEWS</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="btn-getstarted" href="courses.html">Get Started</a>
    </div>
</header>
