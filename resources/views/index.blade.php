@extends('layouts.app')



@section('content')


    <section id="home" class="p-5 text-white wow slideInLeft" data-wow-duration=".5s" data-wow-delay=".5s" style=" background-color: rgb(75,186,182);">
        <div class="container mb-5 py-5">
            <div class="d-md-flex align-items-center justify-content-between p-5">
                <div class="text-light p-5">
                    <p class="lead text-uppercase">sanctifysoft LIMITED</p>
                    <h1 class="mb-5 mt-5" >IT Products and <br> Solutions
                        <br> Engineering Lab
                    </h1>
                    <a href="#"> 
                        <button type="button" class="btn rounded-pill" style=" background-color: aliceblue;">LEARN
                            MORE</button>
                    </a>
                </div>
                <img src="{{ asset('frontend') }}/images/welcome.svg" alt="" class="img-fluid w-50">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="p-5 text-light wow slideInRight" data-wow-offset="1"  data-wow-iteration="1" style="background-color: rgb(66, 90, 214)">
        <div class="container px-5 pb-5 mb-5">
            <div class="row ">
                <div class="col-md-6 px-5 wow slideInLeft" data-wow-duration=".5s" data-wow-delay=".5s">
                    <p>IT COMPANY BASED IN BANGLADESH</p>
                    <h1 class="mb-5">About Us</h1>
                    <img  class="px-5 img-fluid" src="{{ asset('frontend') }}/images/iPhone-min.webp" alt="About Us Image" style="">
                </div>
                <div class="col-md-6 about-text-btn" style="margin-top: 200px;">
                    <h2>SANCTIFYSOFT Limited provides end-to-end business solutions that leverage technical
                        consulting, systems design, development, integration, product engineering, maintenance, and
                        implementation services.</h2>
                    <p class="mb-5 mt-5 text-light" style="color:rgb(149,149,162) ;">Our primary goal as a top-tier supplier of technological services in Bangladesh and overseas is to deliver exceptional customer service.</p>
                    <button type="button" class="btn btn-light rounded-pill">GET IN TEUCH</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->

    <section id="services" class="p-5 text-white wow bounceInUp" data-wow-offset="1"  data-wow-iteration="1" style=" background-color: #fff;">
        <div class="container">
            <div class="services_content d-md-flex align-items-center justify-content-between px-5 wow fadeInUp" data-wow-duration="2s">
                <div class="text-light p-5">
                    <p class="lead text-uppercase text-dark">sanctifysoft LIMITED</p>
                    <h1 class="mb-5 mt-5 text-dark">IT Products and <br> Solutions
                        <br> Engineering Lab
                    </h1>
                </div>
                <img src="{{ asset('frontend') }}/images/web-development.svg" alt="" class="img-fluid w-50">
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4 p-5 wow fadeInLeft" data-wow-iteration="1" data-wow-duration="500ms">
                <div class="col">
                    <div class="card h-100  p-5 " style="background-color: rgb(59,88,137);">
                        <img src="{{ asset('frontend') }}/images/Screenshot (2).png" class="img-fluid" alt="..." style="    width: 37px;">
                        <br>
                        <h5 class="text-light">
                            Development Outsourcing
                        </h5>
                        <ul class="service_list" style="color: rgb(89,144,169);">
                            <li>Mobile Applications (iOS, Android)</li>
                            <li>Custom Web Applications</li>
                            <li> Reporting & Analytics </li>
                        </ul>

                    </div>
                </div>
                <div class="col">
                    <div class="card h-100  p-5 " style="background-color: rgb(59,88,137);">
                        <img src="{{ asset('frontend') }}/images/icon1.png" class="img-fluid" alt="..." style="    width: 37px;">
                        <br>
                        <h5 class="text-light">
                            Consulting Services
                        </h5>
                        <ul class="service_list" style="color: rgb(89,144,169);">
                            <li>Product Development </li>
                            <li>Enterprise Resource Planning (ERP)</li>
                            <li>IT Strategy & Architecture </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100  p-5 " style="background-color: rgb(59,88,137);">
                        <img src="{{ asset('frontend') }}/images/Screenshot (1).png" class="img-fluid" alt="..." style="    width: 37px;">
                        <br>
                        <h5 class="text-light">
                            Implementation & Support
                        </h5>
                        <ul class="service_list" style="color: rgb(89,144,169);">
                            <li>Development Support</li>
                            <li>ERP Implementation</li>
                            <li>System Integration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="home" class="p-5 text-white wow fadeInDown" data-wow-offset="1"  data-wow-iteration="1" data-wow-duration="1s" style=" background-color: rgb(69,62,201);">
        <div class="container p-5 mb-5  px-5">
            <div class="row about-section px-5">
                <div class="col-md-6 mb-5 pb-5">
                    <p>PASSIONATE AND COMMITTED</p>
                    <h1 class="mb-3">Why Choose Us ?</h1>
                    <p class="unique_text_color" style="color: rgb(149,149,162);">Sanctifysoft Limited offers comprehensive business solutions that make use of services for product engineering, systems design, development, integration, and maintenance, as well as technical consultation.</p>
                    <p class="unique_text_color" style="color: rgb(149,149,162);">Our primary goal as a top-tier supplier of technological services in Bangladesh and overseas is to deliver exceptional customer service.</p>
                </div>

                <div class="col-md-6"></div>

                <div class="row  pb-5">
                    <div class="col-md-4 wow pulse" data-wow-iteration="1" data-wow-duration="1s">
                        <img src="{{ asset('frontend') }}/images/Screenshot__3_-removebg-preview.png" class="img-fluid" alt="..." style="    width: 37px;">
                        <br> <br>
                        <h5>01</h5>
                        <h5>Scalable Solutions</h5>
                        <p class="unique_text_color" style="color: rgb(149,149,162);">From early discovery to implementation, custom solutions are developed with enterprise-scale in mind.</p>
                    </div>
                    <div class="col-md-4 wow shake" data-wow-iteration="1" data-wow-duration="1s">
                        <img src="{{ asset('frontend') }}/images/Screenshot__4_-removebg-preview.png" class="img-fluid" alt="..." style="    width: 37px;">
                        <br><br>
                        <h5>02</h5>
                        <h5>Global Presence</h5>
                        <p class="unique_text_color" style="color: rgb(149,149,162);" >Working with you are highly skilled consultants and engineers from around the world. </p>
                    </div>
                    <div class="col-md-4 wow bounce" data-wow-iteration="1" data-wow-duration="1s">
                        <img src="{{ asset('frontend') }}/images/Screenshot__5_-removebg-preview.png" class="img-fluid" alt="..." style="    width: 37px;">
                        <br><br>
                        <h5>03</h5>
                        <h5>Attention to detail</h5>
                        <p class="unique_text_color" style="color: rgb(149,149,162);">Process that prioritizes quality during development, including automated testing and deployment.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection