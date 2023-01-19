@extends('Template.layouts.main')
   

@section('content')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-dark">Contact Us</h1>
                    <div class="pt-2">
                        <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Home</a>
                        <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Please Feel Free To Contact Us</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>
            <div class="row g-3 mb-5">
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="contact-item d-flex flex-column align-items-center justify-content-center text-center pb-5">
                        <div class="contact-icon p-3">
                            <div><i class="fa fa-2x fa-map-marker-alt"></i></div>
                        </div>
                        <h4 class="mt-5">123 Street, New York, USA</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="contact-item d-flex flex-column align-items-center justify-content-center text-center pb-5">
                        <div class="contact-icon p-3">
                            <div><i class="fa fa-2x fa-phone"></i></div>
                        </div>
                        <h4 class="mt-5">+012 345 6789</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="contact-item d-flex flex-column align-items-center justify-content-center text-center pb-5">
                        <div class="contact-icon p-3">
                            <div><i class="fa fa-2x fa-envelope-open"></i></div>
                        </div>
                        <h4 class="mt-5">info@example.com</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="height: 500px;">
                    <div class="position-relative h-100">
                        <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center position-relative" style="margin-top: -200px; z-index: 1;">
                <div class="col-lg-8">
                    <div class="bg-primary p-5 m-5 mb-0">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Subject" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

 @endsection