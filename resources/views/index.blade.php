@extends('layouts.app')

@section('title', 'Sanctify Soft')

@section('content')


    <section id="home" class="p-5 text-white wow home_banner slideInLeft" data-wow-duration=".5s" data-wow-delay=".5s" style=" background-color: rgb(75,186,182);">
        <div class="container mb-5 py-5">
            <div class="banner_mobile d-md-flex align-items-center justify-content-between p-5">
                <div class="text-light p-5">
                    <p class="lead text-uppercase">sanctifysoft LIMITED</p>
                    <h1 class="mb-5 mt-5" >IT Products and <br> Solutions
                        <br> Engineering Lab
                    </h1>
                </div>
                <img src="{{ asset('frontend') }}/images/welcome.svg" alt="" class="img-fluid w-50">
            </div>
        </div>
    </section>
    
    
    <!-- About Section -->
    <section id="about" class="p-5 about_us text-light wow slideInRight" data-wow-offset="1"  data-wow-iteration="1" style="background-color: rgb(66, 90, 214)">
        <div class="container px-5 pb-5 mb-5">
            <div class="row ">
                <div class="mobile_responsive_column col-md-6 px-5 wow slideInLeft" data-wow-duration=".5s" data-wow-delay=".5s">
                    <p>IT COMPANY BASED IN BANGLADESH</p>
                    <h1 class="mb-5">About Us</h1>
                    <img  class="px-5 img-fluid" src="{{ asset('frontend') }}/images/iPhone-min.webp" alt="About Us Image" style="">
                </div>
                <div class="col-md-6 about-text-btn" style="margin-top: 200px;">
                    <h2>SANCTIFYSOFT Limited provides end-to-end business solutions that leverage technical
                        consulting, systems design, development, integration, product engineering, maintenance, and
                        implementation services.</h2>
                    <p class="mb-5 mt-5 text-light" style="color:rgb(149,149,162) ;">Our primary goal as a top-tier supplier of technological services in Bangladesh and overseas is to deliver exceptional customer service.</p>
                    <a href="#contact" class="btn btn-light rounded-pill">GET IN TOUCH</a>
                </div>
            </div>
        </div>
    </section>


    {{-- our tecnology section --}}
    <section class="service-section web-servic pad-tb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="common-heading">
              <h2 class="mb30">Technology Stack</h2>
            </div>
          </div>
        </div>

        <div class="row upset link-hover shape-num justify-content-center">
          <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="s-block min-height" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
              <div class="s-card-icon">
                <img src="{{ asset('frontend') }}/images/tecnology/Stack Logo/Laravel.svg" alt="Laravel" class="img-fluid">
              </div>
              <h4>Laravel</h4>
              <p>Modern PHP framework for web application development.</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="s-block min-height" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
              <div class="s-card-icon">
                <img src="{{ asset('frontend') }}/images/tecnology/Stack Logo/PHP.svg" alt="PHP" class="img-fluid">
              </div>
              <h4>PHP</h4>
              <p>A versatile scripting language for web development.</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
            <div class="s-block min-height" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
              <div class="s-card-icon">
                <img src="{{ asset('frontend') }}/images/tecnology/Stack Logo/Django.svg" alt="Django" class="img-fluid">
              </div>
              <h4>Django</h4>
              <p>High-level Python web framework for rapid development.</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
            <div class="s-block min-height" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
              <div class="s-card-icon">
                <img src="{{ asset('frontend') }}/images/tecnology/Stack Logo/Dot Net.svg" alt="Dot Net" class="img-fluid">
              </div>
              <h4>Dot Net</h4>
              <p>Versatile framework for building Windows applications.</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
            <div class="s-block mb0 min-height" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
              <div class="s-card-icon">
                <img src="{{ asset('frontend') }}/images/tecnology/Stack Logo/Node.js.svg" alt="Node JS" class="img-fluid">
              </div>
              <h4>Node JS</h4>
              <p>A powerful runtime environment for JavaScript that enables server-side applications and efficient event-driven programming.</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="s-block min-height" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
              <div class="s-card-icon">
                <img src="{{ asset('frontend') }}/images/tecnology/Stack Logo/expressjs.svg" alt="Express JS" class="img-fluid">
              </div>
              <h4>Express JS</h4>
              <p>Minimalist web application framework for Node JS.</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
            <div class="s-block min-height" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
              <div class="s-card-icon">
                <img src="{{ asset('frontend') }}/images/tecnology/Stack Logo/Next.js.svg" alt="Next JS" class="img-fluid">
              </div>
              <h4>Next JS</h4>
              <p>A popular React framework for web development.</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
            <div class="s-block min-height" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
              <div class="s-card-icon">
                <img src="{{ asset('frontend') }}/images/tecnology/Stack Logo/Nuxt.svg" alt="Nuxt JS" class="img-fluid">
              </div>
              <h4>Nuxt JS</h4>
              <p>A versatile framework for building Vue.js applications.</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
            <div class="s-block mb0 min-height" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
              <div class="s-card-icon">
                <img src="{{ asset('frontend') }}/images/tecnology/Stack Logo/Angular.svg" alt="Angular JS" class="img-fluid">
              </div>
              <h4>Angular JS</h4>
              <p>A powerful JavaScript framework for web apps.</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
            <div class="s-block mb0 min-height" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
              <div class="s-card-icon">
                <img src="{{ asset('frontend') }}/images/tecnology/Stack Logo/React.svg" alt="React JS" class="img-fluid">
              </div>
              <h4>React JS</h4>
              <p>JavaScript library for building user interfaces.</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
            <div class="s-block mb0 min-height" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
              <div class="s-card-icon">
                <img src="{{ asset('frontend') }}/images/tecnology/Stack Logo/Vue.svg" alt="Vue JS" class="img-fluid">
              </div>
              <h4>Vue JS</h4>
              <p>Progressive JavaScript framework for building UIs.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Services Section -->

    <section id="services" class="p-5 text-white wow bounceInUp" data-wow-offset="1"  data-wow-iteration="1" style=" background-color: #fff;">
        <div class="container">
            <div class="services_content d-md-flex align-items-center justify-content-between px-5 wow fadeInUp" data-wow-duration="2s">
                <div class="text-light services_moblie_version_text p-5">
                    <p class="lead text-uppercase text-dark">sanctifysoft LIMITED</p>
                    <h1 class="mb-5 mt-5 text-dark">IT Products and <br> Solutions
                        <br> Engineering Lab
                    </h1>
                </div>
                <img src="{{ asset('frontend') }}/images/web-development.svg" alt="" class="img-fluid w-50">
            </div>

            <div class="row development_services row-cols-1 row-cols-md-3 g-4 p-5 wow fadeInLeft" data-wow-iteration="1" data-wow-duration="500ms">
                <div class="col mobile_res_col">
                    <div class="card h-100  p-5 " style="background-color: rgb(59,88,137);">
                        <img src="{{ asset('frontend') }}/images/Screenshot (2).png" class="img-fluid" alt="..." style=" width: 37px;">
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
                <div class="col mobile_res_col">
                    <div class="card h-100  p-5 " style="background-color: rgb(59,88,137);">
                        <img src="{{ asset('frontend') }}/images/icon1.png" class="img-fluid" alt="..." style=" width: 37px;">
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
                <div class="col mobile_res_col">
                    <div class="card h-100  p-5 " style="background-color: rgb(59,88,137);">
                        <img src="{{ asset('frontend') }}/images/Screenshot (1).png" class="img-fluid" alt="..." style=" width: 37px;">
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

    {{-- blog section --}}
    <section class="blog-home pad-tb" id="blogs">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="common-heading">
              <h2 class="mb0">Our Blog</h2>
            </div>
          </div>
        </div>
        <div class="row">

          @foreach($blogs as $blog)
          <div class="col-lg-4 col-sm-6 single-card-item wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="isotope_item hover-scale">
              <div class="item-image min_img_size">
                <a href="{{ route('blog.details', $blog->id) }}">
                  <img src="{{ asset($blog->thumbnail) }}" alt="blog" class="img-fluid">
                </a>
                <span class="category-blog">
                  <a href="javascript::void()">{{ $blog->backend_tech }}</a>
                  <a href="javascript::void()">{{ $blog->frontend_tech }}</a>
                </span>
              </div>
              <div class="item-info blog-info">
                <div class="entry-blog">
                  <span class="posted-on">
                    <a href="javascript::void()">
                      <i class="fas fa-clock"></i> {{ date('F d, Y', strtotime($blog->created_at)) }} </a>
                  </span>
                </div>
                <h4>
                  <a href="{{ route('blog.details', $blog->id) }}">{{ $blog->title }}</a>
                </h4>
                <p>{{ $blog->description }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <div class="d-flex blog_pagination justify-content-center">
            {!! $blogs->links() !!}
        </div>
      </div>
    </section>



    <section id="home" class="p-5 text-white wow fadeInDown" data-wow-offset="1"  data-wow-iteration="1" data-wow-duration="1s" style=" background-color: rgb(69,62,201);">
        <div class="container mobile_res_pd p-5 mb-5  px-5">
            <div class="row about-section px-5">
                <div class="col-md-6 mb-5 pb-5">
                    <p>PASSIONATE AND COMMITTED</p>
                    <h1 class="mb-3">Why Choose Us ?</h1>
                    <p class="unique_text_color" style="color: rgb(149,149,162);">Sanctifysoft Limited offers comprehensive business solutions that make use of services for product engineering, systems design, development, integration, and maintenance, as well as technical consultation.</p>
                    <p class="unique_text_color" style="color: rgb(149,149,162);">Our primary goal as a top-tier supplier of technological services in Bangladesh and overseas is to deliver exceptional customer service.</p>
                </div>

                <div class="col-md-6"></div>

                <div class="row mobile_res_center pb-5">
                    <div class="col-md-4 mobile_res_card wow pulse" data-wow-iteration="1" data-wow-duration="1s">
                        <img src="{{ asset('frontend') }}/images/Screenshot__3_-removebg-preview.png" class="img-fluid" alt="..." style="    width: 37px;">
                        <br> <br>
                        <h5>01</h5>
                        <h5>Scalable Solutions</h5>
                        <p class="unique_text_color" style="color: rgb(149,149,162);">From early discovery to implementation, custom solutions are developed with enterprise-scale in mind.</p>
                    </div>
                    <div class="col-md-4 mobile_res_card wow shake" data-wow-iteration="1" data-wow-duration="1s">
                        <img src="{{ asset('frontend') }}/images/Screenshot__4_-removebg-preview.png" class="img-fluid" alt="..." style="    width: 37px;">
                        <br><br>
                        <h5>02</h5>
                        <h5>Global Presence</h5>
                        <p class="unique_text_color" style="color: rgb(149,149,162);" >Working with you are highly skilled consultants and engineers from around the world. </p>
                    </div>
                    <div class="col-md-4 mobile_res_card wow bounce" data-wow-iteration="1" data-wow-duration="1s">
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