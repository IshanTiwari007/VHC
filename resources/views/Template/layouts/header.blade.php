 <!-- Topbar Start -->
 <div class="container-fluid bg-primary d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark py-2 pe-3 border-end border-white" href=""><i class="bi bi-telephone text-secondary me-2"></i>+012 345 6789</a>
                    <a class="text-dark py-2 px-3" href=""><i class="bi bi-envelope text-secondary me-2"></i>info@example.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body py-2 px-3 border-end border-white" href="">
                        <i class="fab fa-facebook-f text-secondary"></i>
                    </a>
                    <a class="text-body py-2 px-3 border-end border-white" href="">
                        <i class="fab fa-twitter text-secondary"></i>
                    </a>
                    <a class="text-body py-2 px-3 border-end border-white" href="">
                        <i class="fab fa-linkedin-in text-secondary"></i>
                    </a>
                    <a class="text-body py-2 px-3 border-end border-white" href="">
                        <i class="fab fa-instagram text-secondary"></i>
                    </a>
                    <a class="text-body py-2 ps-3" href="">
                        <i class="fab fa-youtube text-secondary"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm px-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-handshake text-light me-3"></i>Vidya Health Care</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4 border-end border-5 border-primary">
            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
            <a href="{{ url('/service') }}" class="nav-item nav-link">Service</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ url('/blog') }}" class="dropdown-item">Blog Grid</a>
                    <a href="{{ url('/detail') }}" class="dropdown-item">Blog Detail</a>
                    <a href="{{ url('/team') }}" class="dropdown-item">The Team</a>
                    <a href="{{ url('/testimonial') }}" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <div class="d-none d-lg-flex align-items-center ps-4">
            <i class="fa fa-2x fa-mobile-alt text-secondary me-3"></i>
            <div>
                <h5 class="text-primary mb-1"><small>Call Now</small></h5>
                <h6 class="text-light m-0">+012 345 6789</h6>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->