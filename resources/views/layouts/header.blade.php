
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
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact Us</a>
        </div>
            <div class="ps-3"> 
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                         <ion-icon name="person-outline" class="text-light fs-5 mb-0" ></ion-icon> 
                        </a>
                    <div class="dropdown-menu ">
                        <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                        <a href="{{ route('register')}}" class="dropdown-item">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
