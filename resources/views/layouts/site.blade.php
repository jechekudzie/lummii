<!DOCTYPE html>
<html lang="en">
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Energy Management & Monitoring</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('logo/Lummii_Energy_Full_Logo_Full_Color_RGB_212px@72ppi.jpg')}}" type="image/png">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/flaticon.css')}}">
    <!--====== Iconfont css ======-->
    <link rel="stylesheet" href="{{asset('assets/fonts/icofont/icofont.css')}}">
    <!--====== Gilory css ======-->
    <link rel="stylesheet" href="{{asset('assets/fonts/gilory/gilory.css')}}">
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!--====== nice-select css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/f28729e30a.css">

    <script src="https://use.fontawesome.com/f28729e30a.js"></script>

    <style type="text/css">
        li.me {
            display: inline-block;
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1);
            transition: all 200ms ease-in;
            transform: scale(1);
        }

        li.me:hover {
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1.5);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1.5);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1.5);
            transition: all 200ms ease-in;
            transform: scale(1.5);
        }

        .active {
            color: black !important;
        }
    </style>

</head>
<body>
<!--====== Start Header ======-->
<header class="header-area header-area-v1">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="top-left">
                        {{--<ul>
                            <li><span><i class="flaticon-factory"></i> Global Partners!</span></li>
                        </ul>--}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="top-right">
                        <ul class="social-link">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-navigation">
        <div class="nav-container">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 logo-col col-6">
                        <div class="site-branding">
                            <div class="brand-logo">
                                <a href="{{route('home')}}"><img src="{{asset('logo/Lummii_Energy_Full_Logo_Full_Color_RGB_212px@72ppi.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-6">
                        <div class="nav-menu">
                            <!-- Navbar Close Icon -->
                            <div class="navbar-close">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item"><a style="color: black; font-size: 17px;font-weight: bold;" href="{{route('home')}}"
                                           class="{{ Request::routeIs('/') ? 'active' : '' }}"
                                        >Home</a>
                                    </li>
                                    <li class="menu-item"><a style="color: white; font-size: 17px;font-weight: bold;" href="{{route('renewable-energy')}}"
                                                             class="{{ Request::routeIs('renewable-energy') ? 'active' : '' }}"
                                        >Renewable Energy</a>
                                    </li>

                                    <li class="menu-item"><a style="color: white; font-size: 17px;font-weight: bold;" href="{{route('energy-efficiency')}}"
                                                             class="{{ Request::routeIs('energy-efficiency') ? 'active' : '' }}"
                                        >Energy Efficiency</a>
                                    </li>
                                    <li class="menu-item"><a style="color: white; font-size: 17px;font-weight: bold;" href="{{route('eniscope')}}" class="{{ Request::routeIs('eniscope') ? 'active' : '' }}">
                                            Eniscope
                                        </a>
                                    </li>

                                    <li class="menu-item"><a style="color: white; font-size: 17px;font-weight: bold;" href="{{route('case_studies')}}"
                                                             class="{{ Request::routeIs('case_studies') ? 'active' : '' }}"
                                        >EE Case Studies</a></li>
                                    <li class="menu-item"><a style="color: white; font-size: 17px;font-weight: bold;" href="{{route('solutions')}}"
                                                             class="{{ Request::routeIs('solutions') ? 'active' : '' }}"
                                        >EE Solutions</a>
                                    </li>
                                    <li class="menu-item"><a style="color: white; font-size: 17px;font-weight: bold;" href="{{route('technologies')}}"
                                                             class="{{ Request::routeIs('technologies') ? 'active' : '' }}"
                                        >EE Technologies</a></li>
                                    <li class="menu-item"><a style="color: white; font-size: 17px;font-weight: bold;" href="{{route('about')}}"
                                                             class="{{ Request::routeIs('about') ? 'active' : '' }}"
                                        >About us</a></li>
                                    <li class="menu-item"><a style="color: white; font-size: 17px;font-weight: bold;" href="{{route('contact')}}"
                                                             class="{{ Request::routeIs('contact') ? 'active' : '' }}"
                                        >Contact</a></li>

                                </ul>
                            </nav>
                        </div>
                        <!-- Navbar Toggler -->
                        <div class="navbar-toggler float-right">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!--====== End Header ======-->
@yield('content')
<!--====== Start Footer ======-->
<footer class="footer-area footer-area-v1 bg_cover" style="background-image: url(assets/images/bg/footer-bg-1.jpg);">
    <div class="footer-widget pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="widget about-widget mb-40">
                        <img src="{{asset('/logo/Lummii_Energy_Full_Logo_Full_Color_RGB_212px@72ppi.jpg')}}" alt="">
                        <ul class="social-link">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="widget widget-categories mb-40">
                        <h4 class="widget-title">Quick Link</h4>
                        <ul class="widget-link">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/eniscope')}}">Eniscope</a></li>
                            <li><a href="{{url('/case_studies')}}">Case Studies</a></li>
                            <li><a href="{{url('/solutions')}}">Solutions</a></li>
                            <li><a href="{{url('/technologies')}}">Technologies</a></li>
                            <li><a href="{{url('/about')}}">About us</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="widget newsletter-widget mb-40">
                        <h4 class="widget-title">Contact us</h4>
                        <div class="newsletter-form mb-20">
                            <p>
                                Lummii Group<br/>
                                71-75 Shelton Street,
                                Covent Garden<br/>
                                London,
                                WC2H 9JQ
                            </p>
                        </div>
                        <div class="newsletter-info">
                            <h5>Give us a call:</h5>
                            <p><a href="tel:+4420 7118 3255">+4420 7118 3255</a></p>
                        </div>
                        <br/>
                        <div class="newsletter-info">
                            <h5>Send us an email:</h5>
                            <p><a href="mailto:savings@lummii.energy">savings@lummii.energy</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="copyright-text text-center">
                        <p>Copyright © {{date('Y')}}. All right reserved. Design by <span>Leading Digital</span>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!--====== End Footer ======-->
<!--====== back-to-top ======-->
<a href="#" class="back-to-top"><i class="flaticon-up-arrow-angle"></i></a>
<!--====== Jquery js ======-->
<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!--====== Bootstrap js ======-->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!--====== Slick js ======-->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!--====== Magnific Popup js ======-->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!--====== Isotope js ======-->
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<!--====== Imagesloaded js ======-->
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<!--====== nice-select js ======-->
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<!--====== counterup js ======-->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<!--====== waypoints js ======-->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<!--====== Main js ======-->
<script src="{{asset('assets/js/main.js')}}"></script>
<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/609c2363185beb22b30caef1/1f5gukfvs';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>

<!--End of Tawk.to Script-->
</body>
</html>
