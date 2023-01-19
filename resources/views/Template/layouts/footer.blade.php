<!-- Footer Start -->
<div class="container-fluid bg-dark bg-footer text-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-primary">Get In Touch</h4>
                <hr class="w-25 text-secondary mb-4" style="opacity: 1;">
                <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>123 Street, Noida, India</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-primary">Our Services</h4>
                <hr class="w-25 text-secondary mb-4" style="opacity: 1;">
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="{{ url('/service') }}"><i class="fa fa-angle-right me-2"></i>HealthCare </a>
                    <a class="text-light mb-2" href="{{ url('/service') }}"><i class="fa fa-angle-right me-2"></i>Cook</a>
                    <a class="text-light mb-2" href="{{ url('/service') }}"><i class="fa fa-angle-right me-2"></i>Nurse</a>
                    <a class="text-light mb-2" href="{{ url('/service') }}"><i class="fa fa-angle-right me-2"></i>Baby sitter</a>
                    <a class="text-light mb-2" href="{{ url('/service') }}"><i class="fa fa-angle-right me-2"></i>Cleaner</a>
                    <a class="text-light" href="{{ url('/service') }}"><i class="fa fa-angle-right me-2"></i>Porter</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-primary">Quick Links</h4>
                <hr class="w-25 text-secondary mb-4" style="opacity: 1;">
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="{{ url('/') }}"><i class="fa fa-angle-right me-2"></i>Home</a>
                    <a class="text-light mb-2" href="{{ url('/about') }}"><i class="fa fa-angle-right me-2"></i>About Us</a>
                    <a class="text-light mb-2" href="{{ url('/services') }}"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                    <a class="text-light mb-2" href="{{ url('/team') }}"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
                    <a class="text-light mb-2" href="{{ url('/detail') }}"><i class="fa fa-angle-right me-2"></i>Latest Blog</a>
                    <a class="text-light" href="{{ url('/contact') }}"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-primary">Newsletter</h4>
                <hr class="w-25 text-secondary mb-4" style="opacity: 1;">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-3 border-0" placeholder="Your Email">
                        <button class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
                <h6 class="text-primary mt-4 mb-3">Follow Us</h6>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-primary text-dark py-4">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-md-0">Copyright &copy; <a class="text-dark fw-bold" href="#">Vidya Health Care</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0">Designed by <a class="text-dark fw-bold" href="https://github.com/IshanEVS">Ishan Tiwari</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('styling/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('styling/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('styling/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('styling/js/main.js')}}"></script>