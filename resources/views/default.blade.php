<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Business Bootstrap Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Promodise Template v1.0">

{{--    <!-- bootstrap.min css -->--}}
{{--    <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.min.css') }}">--}}
{{--    <!-- fontawesome css -->--}}
{{--    <link rel="stylesheet" href="{{ asset('resources/css/all.css') }}">--}}
{{--    <!-- Icofont -->--}}
{{--    <link rel="stylesheet" href="{{ asset('resources/css/icofont.css') }}">--}}
{{--    <!-- Main Stylesheet -->--}}
{{--    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">--}}

    @vite([
        'resources/css/bootstrap.min.css',
        'resources/css/all.css',
        'resources/css/icofont.css',
        'resources/css/styles.css',
    ])



    <!--Favicon-->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body data-spy="scroll" data-target="#mainNav">
<nav class="navbar navbar-expand-lg fixed-top trans-navigation">
    <div class="container">
        <a class="navbar-brand" href="index.html">
{{--            <img src="images/logo.png" alt="" class="img-fluid b-logo">--}}
            <img src="{{ Vite::image('logo.png') }}"  class="img-fluid b-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav"
                aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <i class="fa fa-bars"></i>
      </span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
            <ul class="navbar-nav ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#!" id="navbarWelcome" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Home <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarWelcome">
                        <li><a class="dropdown-item" href="index.html">Home-1</a></li>
                        <li><a class="dropdown-item" href="index-2.html">Home-2</a></li>
                        <li><a class="dropdown-item" href="index-3.html">Onepage</a></li>

                        <li class="dropdown dropdown-submenu dropright">
                            <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                            <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu dropleft">
                            <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                            <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                                <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="service.html">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="pricing.html">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--MAIN HEADER AREA END -->
@yield('content');
<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white">@yield('title')</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, perferendis?</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->

<!--  FOOTER AREA START  -->
<section id="footer" class="section-padding">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-lg-4">
                <div class="footer-widget footer-link">
                    <h4>We concern about you<br> to grow business rapidly.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsam hic non sunt recusandae atque unde saepe nihil earum voluptatibus aliquid optio suscipit nobis quia vel quod, iure quae.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="footer-widget footer-link">
                    <h4>About</h4>
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="service.html">Service</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="#!">Team</a></li>
                        <li><a href="#!">Testimonials</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="footer-widget footer-link">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#!">How it Works</a></li>
                        <li><a href="#!">Support</a></li>
                        <li><a href="#!">Privacy Policy</a></li>
                        <li><a href="#!">Report Bug</a></li>
                        <li><a href="#!">License</a></li>
                        <li><a href="#!">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="footer-widget footer-text">
                    <h4>Our location</h4>
                    <p class="mail"><span>Mail:</span> promdise@gmail.com</p>
                    <p><span>Phone :</span>+202-277-3894</p>
                    <p><span>Location:</span> 455 West Orchard Street Kings Mountain, NC 28086,NOC building</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer-copy">
                    Copyright &copy; 2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  FOOTER AREA END  -->


<!--
Essential Scripts
=====================================-->


{{--<!-- Main jQuery -->--}}
{{--<script src="{{ asset('resources/js/jquery.min.js') }}"></script>--}}
{{--<!-- Bootstrap css -->--}}
{{--<script src="{{ asset('resources/js/bootstrap.min.js') }}"></script>--}}
{{--<!-- main script -->--}}
{{--<script src="{{ asset('resources/js/script.js') }}"></script>--}}

@vite([
        'resources/js/app.js',
        'resources/js/bootstrap.min.js',
        'resources/js/script.js',
    ])

</body>
</html>
