@extends('layouts.site')

@section('content')
    {{--
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    --}}
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            /*border: 1px solid #dddddd;*/
            text-align: left;
            padding: 8px;
        }

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .slick-list:focus {
            outline: none;
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }

        .slick-track:before,
        .slick-track:after {
            display: table;
            content: '';
        }

        .slick-track:after {
            clear: both;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }

        [dir='rtl'] .slick-slide {
            float: right;
        }

        .slick-slide img {

            display: block;

        }

        .slick-slide.slick-loading img {
            display: none;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }

        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }

        .slick-arrow.slick-hidden {
            display: none;
        }

        .centered {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .customer-logos .slide {
            display: flex;
            align-items: flex-end; /* align logos to the bottom */
            height: auto; /* set a standard height for all slides */
            overflow: hidden; /* prevents oversized logos from breaking the layout */
        }

        .customer-logos .slide img {
            max-height: 100%; /* ensures the logos do not exceed their container */
            width: auto; /* maintain aspect ratio */
            vertical-align: bottom; /* align the image to the bottom if flex is not supported */
        }


    </style>

    <!--====== Start Banner section ======-->
    <section class="banner-area-v1">
        <div class="hero-slider-one">
            <div class="single-hero bg_cover" style="background-image: url('banner.jpeg');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <h1>
                                    Intuitive Energy Solutions
                                </h1>
                                <h4 style="font-size: 30px;">
                                    Renewable Energy & Energy Efficiency with <strong
                                        style="font-weight: bold;color: #f9580e;">ZERO CAPITAL OUTLAY</strong> From You.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-arrows"></div>
    </section>
    <!--====== End Banner section ======-->

    <!--====== Start About section ======-->
    <section style="padding:5%;" class="about-area-v1 pb-120">
        <div class="container">
            <div class="row">
                <div   class="col-lg-6">

                    <div style="margin-top: 150px" id="mySlider" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#mySlider" data-slide-to="0" class="active"></li>
                            <li data-target="#mySlider" data-slide-to="1"></li>
                            <li data-target="#mySlider" data-slide-to="2"></li>

                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img style="width: 100%;height: 400px" class="d-block w-100" src="{{asset('solar/Hospital.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img style="width: 100%;height: 400px" class="d-block w-100" src="{{asset('solar/about.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img style="width: 100%;height: 400px" class="d-block w-100" src="{{asset('solar/Hut Solar.png')}}" alt="Second slide">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#mySlider" role="button" data-slide="prev">
                            <span style="color: red" class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span style="color: red" class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#mySlider" role="button" data-slide="next">
                            <span style="color: red" class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span style="color: red" class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-box">
                        <div class="section-title mb-25">
                            <h2>About <span>Lummii</span></h2>
                        </div>
                        <p style="color: black;text-align: justify">

                        <p style="color: black;text-align: justify">
                            We are a next generation climate conscious energy business committed to revolutionising the
                            energy landscape by aggressively scaling solar generation and adopting energy efficiency.
                            Our vision is to be a catalyst for a sustainable and uninterrupted energy future, providing
                            reliable and fully funded solar generation and energy efficiency solutions.
                            Under our solar division we specialise in rooftop solar solutions which are then packaged in
                            a unique innovative way to create bankable & scaleable solutions per country.

                            <br/>
                            Under our energy efficiency division we combine powerful hardware with intuitive cloud based
                            software and harness the power of big data, IOT and AI to provide the most comprehensive
                            energy management solution available to businesses.
                            <br>
                            By combining powerful hardware with intuitive cloud
                            based software we harness the power of Big Data, IoT and AI to provide the most comprehensive energy management solution available
                            to businesses across various sectors including Industry, Mining, QSR, Super & Convenience
                            Stores, Commercial etc. We guarantee energy savings that directly impact your bottom line
                            whilst in the process helping you to meet your business’ climate targets.
                        </p>
                        <h4>At Lummii our mission is to bring fully funded innovative off the book every solution addresses.</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End About section ======-->

    <section class="project-area-v1">
        <div class="project-main-section">
            <div class="project-bg bg_cover"
                 style="background-image: url('https://ik.imagekit.io/rc123/BestEnergy/wp-content/uploads/2018/03/solutions-city-energy-night-2.jpg');"></div>
            <div class="container">
                <div class="col-lg-8">
                    <div class="section-title section-white-title mb-100">
                        <h2>Treble Renewables and Double <span>Efficiency, COP28 Objective.</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-slide-wrapper">
            <div class="container">
                <div class="row project-slide-one">
                    <div class="col-lg-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{asset('usage.jpg')}}" style="width: 400px; height: 200px"
                                     style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Monitor Your Energy Usage</span>
                                <h4><a href="#">Eniscope</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{asset('solar/Candles.png')}}" style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Sustainable Energy for a Brighter Africa</span>
                                <h4><a href="#">Illuminate Your World with Lummii Solar</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{asset('qsr.jpg')}}" style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Reduce Energy Waste</span>
                                <h4><a href="#">QSR</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{asset('solar/Rural Project.png')}}" style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Harness the Sun</span>
                                <h4><a href="#"> Empower Your Community.</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{asset('commercial.jpg')}}" style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Reduce Energy Waste</span>
                                <h4><a href="#">Commercial Efficiency</a></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{asset('solar/School.jpg')}}" style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Join the Solar Revolution with Lummii</span>
                                <h4><a href="#">Powering Progress: One Rooftop at a Time.</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{asset('monitor.jpg')}}" style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Meet Your Reduction Targets</span>
                                <h4><a href="#">Energy, Cost, Carbon Footprints</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{asset('solar/Hut Solar.png')}}" style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Energy independence</span>
                                <h4><a href="#">Environmental stewardship.</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{asset('buildings.jpg')}}" style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Effectively Maintain Your Buildings</span>
                                <h4><a href="#">Predictive Maintenance</a></h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section style="margin-top: 15px;" class="cta-area-v1">
        <div class="container-fluid">
            <div class="cta-wrapper main-bg">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="section-title section-white-title">
                            <h2>Powering Africa with the Sun, <span style="font-size: 25px;">Where every ray of sunshine brings us closer to energy independence and environmental stewardship.</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: 30px;" class="about-area-v1 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="">
                        <div class="section-title mb-3">
                            <h2>Lummii Solar Division<span class="thin">Powering Africa with the Sun.</span></h2>
                        </div>

                        <p style="color: black;text-align: justify">Introducing Lummii's Solar Division, dedicated to
                            unlocking Africa's vast solar potential
                            through cutting-edge rooftop solar solutions. Our mission is driven by the stark energy
                            divide, with 600 million Africans lacking electricity despite abundant solar resources.
                            Prioritizing renewable generation to address frequent load shedding, we innovate in solar
                            financing to tailor solutions for Africa's unique market needs.</p>
                        <br/>
                        <p style="color: black;text-align: justify">
                            With a focus on sustainable
                            energy access, Lummii Solar is committed to bridging the energy gap, ensuring our approach
                            aligns with our ethos of delivering energy efficiency and impactful, bankable solar models
                            across the continent.
                        </p>
                        <br/>

                        <h6 style="font-weight: bold;font-size: 20px;text-align: justify">While we have interests in
                            Eastern Europe, our heart is in Africa. Our mission is to bridge the vast energy divide with
                            clean, renewable power, harnessing the abundant sun irradiance across the continent, their
                            greatest natural resource.</h6>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="margin-top: 150px" id="mySolar" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#mySolar" data-slide-to="0" class="active"></li>
                            <li data-target="#mySolar" data-slide-to="1"></li>
                            <li data-target="#mySolar" data-slide-to="2"></li>

                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img style="width: 100%;height: 400px" class="d-block w-100" src="{{asset('solar/Candles.png')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img style="width: 100%;height: 400px" class="d-block w-100" src="{{asset('solar/Hse.png')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img style="width: 100%;height: 400px" class="d-block w-100" src="{{asset('solar/Hut Solar.png')}}" alt="Second slide">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#mySolar" role="button" data-slide="prev">
                            <span style="color: red" class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span style="color: red" class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#mySolar" role="button" data-slide="next">
                            <span style="color: red" class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span style="color: red" class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <hr/>
                <br/>
                <br/>
                <div style="margin-top: 30px;" class="col-lg-8">
                    <a style="background-color:#f9580e;color: white; " href="{{url('/renewable-energy')}}" class="btn">
                        Learn More About Sustainable Energy for a Brighter Africa <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <h2 style="text-align: center" >OUR PARTNER NETWORK CLIENTS</h2>
        <br/>
        <section class="customer-logos slider ">

            <div class="slide">
                <img style="height: 100%;align-items: center" src="{{asset('partners/1.jpg')}}">
            </div>
            <div class="slide">
                <img style="height: 100%;align-items: center" src="{{asset('partners/2.jpg')}}">
            </div>
            <div class="slide">
                <img style="height: 100%;align-items: center" src="{{asset('partners/3.jpg')}}">
            </div>
            <div class="slide">
                <img style="height: 100%;align-items: center" src="{{asset('partners/4.jpg')}}">
            </div>
            <div class="slide">
                <img style="height: 100%;align-items: center" src="{{asset('partners/5.jpg')}}">
            </div><div class="slide">
                <img style="height: 100%;align-items: center" src="{{asset('partners/6.jpg')}}">
            </div>

        </section>
    </div>

    <section class="cta-area-v1 pt-120 pb-110">
        <div class="container">
            <div class="cta-wrapper main-bg">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="section-title section-white-title">
                            <h2>The best and complete energy management solution</h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="button-box">
                            <a href="{{url('/contact')}}" class="main-btn">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>

@endsection
