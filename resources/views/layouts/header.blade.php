<!-- Topbar Start -->
<div class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="small text-light" href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a class="small text-light" href="#">Career</a></li>
                <li class="breadcrumb-item"><a class="small text-light" href="#">Terms</a></li>
                <li class="breadcrumb-item"><a class="small text-light" href="#">Privacy</a></li>
            </ol>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Follow us:</small>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn-lg-square text-primary border-end rounded-0" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn-lg-square text-primary border-end rounded-0" href=""><i
                        class="fab fa-twitter"></i></a>
                <a class="btn-lg-square text-primary border-end rounded-0" href=""><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn-lg-square text-primary pe-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="text-primary m-0">Baker</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link ">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('service') }}" class="nav-item nav-link">Services</a>
            <a href="product.html" class="nav-item nav-link">Products</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('team') }}" class="dropdown-item">Our Team</a>
                    <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact Us</a>
        </div>
        <div class=" d-none d-lg-flex">
            <div class="flex-shrink-0 btn-lg-square border border-light rounded-circle">
                <i class="fa fa-phone text-primary"></i>
            </div>
            <div class="ps-3">
                <small class="text-primary mb-0">Call Us</small>
                <p class="text-light fs-5 mb-0">+012 345 6789</p>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
