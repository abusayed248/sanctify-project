<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanctify Soft</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend') }}/images/tecnology/Stack Logo/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css">

    {{-- whatsapp chatbox --}}
    <link rel="stylesheet" href="{{ asset('frontend') }}/whatsapp-chat/venom-button.min.css" />

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/technology.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">


</head>

<body>
    <div id="myButton"></div>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg header_section  fixed-top page-header">
        <div class="container">
            <a class="navbar-brand" href="#"> <img src="{{ asset('frontend') }}/images/sanctify-soft.svg" alt="" class="img-fluid" srcset=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" id="top">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blogs">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    @yield('content')

    <!-- Contact Us Section -->
    <section class="contact_us p-5 wow pulse" data-wow-iteration="1" data-wow-duration="1s" id="contact" style="background-color: rgb(82, 79, 103);">
        <div class="container"  >
            <main class="row">
                <section class="col mob_res_get_in_touch_text left p-5">
    
                    <div class="contactTitle">
                        <h2>Get In Touch</h2>
                        <p>Dont be shy, Just tell us about your projects and we’ll figure out the best option for you.</p>
                    </div>
    
                    <div class="contactInfo">
    
                        <div class="iconGroup">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="details">
    
                                <span>{{ $site_info->phn_number }}</span>
                            </div>
                        </div>
    
                        <div class="iconGroup">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="details">
                                <a href="mailto:{{ $site_info->gmail }}"><span class="text-lowercase">{{ $site_info->gmail }}</span></a>
                            </div>
                        </div>
    
                        <div class="iconGroup">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="details">
    
                                <span class="text-capitalize">{{ $site_info->location }}</span>
                            </div>
                        </div>
    
                        <div class="iconGroup">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="details">
    
                                <span class="text-capitalize">355 E 143rd Street Bronx, NY 10454</span>
                            </div>
                        </div>


    
                    </div>

                    {{-- <div class="socialMedia">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div> --}}

                </section>
                <section class="col right mt-5">
                    @if(Session::has('error'))
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="alert alert-danger mt-4" role="alert">
                              {{ Session::get('error') }}
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-xl-12">
                            <div id="messageStatus" class="alert alert-success mt-4 d-none" role="alert">
                              
                            </div>
                        </div>
                    </div>
                    
                    <form class="messageForm" action="{{ route('client.message.store') }}" method="post">
                        @csrf
    
                        <div class="inputGroup halfWidth">
                            <input type="text" name="client_name" id="client_name" required="required" placeholder="Name" style="margin-left: -15px; border-radius: 25px; border-color:rgb(52,69,196);">
                        </div>
    
                        <div class="inputGroup halfWidth">
                            <input type="email" name="client_email" id="client_email" placeholder="Email" required="required" style="margin-left: -15px; border-radius: 25px; border-color:rgb(52,69,196)">
                        </div>
    
                        <div class="inputGroup fullWidth">
                            <textarea placeholder="Message" name="client_message" id="client_message" required="required" style="margin-left: -15px;  border-radius: 5px;"></textarea>
                        </div>
    
                        <div class="inputGroup fullWidth">
                            <button class="mob_res_submit_btn" type="submit" id="contactBtn">Submit</button>
                        </div>
                    </form>
                </section>

                <section class="copy_right">
                    <span>All right reserved by &copy;sanctify-soft ({{ date('Y') }})</span>
                </section>
            </main>
        </div>
    </section>
    
    <script src="{{ asset('frontend') }}/js/main.js"></script>
    <!-- Add Bootstrap JS scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/wow.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

    {{-- whatsapp chatbox --}}
    <script src="{{ asset('frontend') }}/whatsapp-chat/venom-button.min.js"></script>

    <script>
       $('#myButton').venomButton({
          phone: '+8801782037090',
          chatMessage: 'Sanctifysoft Chat',
          message: "Type your message here...",
          nameClient: "jQuery Script",
          position:"right",
          showPopup: true
        });
    </script>   

    <script>  
        new WOW().init();

        $("#top li").click(function() {
            $('#top li').removeClass('contact_btn');
            $(this).addClass("contact_btn");
        });  
    </script>

    <script>
        $('.messageForm').on('submit', function (e) {
            e.preventDefault()
            let url = $(this).attr('action');
            let req = $(this).serialize();
            $("#contactBtn").html('Please wait..');
            $("#contactBtn").attr('disabled', true);
            
            $.ajax({
                url: url,
                type: 'post',
                data: req,
                success: function (data) {
                    console.log(data);
                    $("#contactBtn").html('Submit');
                    $("#contactBtn").attr('disabled', false);
                    $('#messageStatus').html(data.message)
                    $('#messageStatus').removeClass('d-none')
                    $('.messageForm').trigger("reset");
                }
            });
        });
    </script>
</body>

</html>