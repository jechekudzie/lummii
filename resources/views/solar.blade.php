@extends('layouts.site')

@section('content')
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

        .scroll-container {
            white-space: nowrap;
            overflow-x: auto;
            overflow-y: hidden;
        }

        .scroll-text {
            display: inline-block;
            padding-left: 100%;
            animation: scroll-left 10s linear infinite;
        }

        @keyframes scroll-left {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(-100%);
            }
        }

    </style>

    <!--====== Start Banner section ======-->
    <section class="banner-area-v1">
        <div class="hero-slider-one">
            <div class="single-hero bg_cover"
                 style="background-image: url('solar/Africa Energy Gap.png'); background-size: cover">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <h1 style="font-size: 80px;">
                                    Sustainable Energy for A Brighter Africa
                                </h1>
                                <h4 style="font-size: 30px;">
                                    <strong
                                        style="font-weight: bold;color: #f9580e;">POWERING PROGRESS, ONE ROOFTOP AT A TIME</strong>
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
    <br/>
    <br/>
    <!--====== Start About Solar section ======-->
    <section class="about-area-v1 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="">
                        <div class="section-title mb-3">
                            <h2>Lummii Solar <span class="thin">Powering Africa with the Sun.</span></h2>
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
                    <div style="margin-top: 100px" id="mySolar" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#mySolar" data-slide-to="0" class="active"></li>
                            <li data-target="#mySolar" data-slide-to="1"></li>

                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img style="width: 100%;height: 400px" class="d-block w-100"
                                     src="{{asset('solar/Candles.png')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img style="width: 100%;height: 400px" class="d-block w-100"
                                     src="{{asset('solar/Hse.png')}}" alt="Second slide">
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
    <!--====== End About section ======-->

    <section style="margin-top: -65px;" class="cta-area-v1">
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


    <section class="service-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-details-wrapper">
                        <div class="service-content">
                            <h3 style="margin-top: 30px" class="title">Renewables First, <span style="color: #f9580e">Efficiency Next</span> </h3>
                            <p style="text-align: justify">
                                In a departure from the norm in developed countries, where energy efficiency precedes
                                renewable solutions, we prioritize energy generation in Africa. Addressing the acute
                                power shortages and frequent load shedding, we focus on generating electricity first,
                                ensuring there's power to be saved later.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-details-wrapper">
                        <div class="service-content">
                            <h3 style="margin-top: 30px" class="title">Innovation in  <span style="color: #f9580e">Solar Financing</span> </h3>
                            <p style="text-align: justify">
                                Our approach to solar isn't just about technology, which has already proven its worth,
                                but also about innovative financing. Recognizing that traditional funding models don't
                                fit the African context, we bring bespoke, bankable solar solutions to the table. Our
                                aim is to make solar energy accessible to all, overcoming financial barriers to
                                adoption.
                            </p>
                        </div>
                    </div>
                </div>

                <div style="padding-top: 25px;" class="col-lg-6">
                    <div class="service-details-wrapper">
                        <div class="service-content">
                            <h3 class="title"> <span style="color: #f9580e">Maximising Efficiency</span> with Solar Power</h3>
                            <p style="text-align: justify">
                                Embrace the Future of Energy: Lummii Solar Solutions epitomise cutting-edge efficiency
                                in harnessing solar power. By transforming Africa's radiant sunlight into clean
                                electricity, we're not just lighting homes; we're paving the way for a sustainable
                                future. Our rooftop solar technology ensures maximum energy capture and conversion,
                                setting a new standard in renewable energy use.
                            </p>
                        </div>
                    </div>
                </div>

                <div style="padding-top: 25px;" class="col-lg-6">
                    <div class="service-details-wrapper">
                        <div class="service-content">
                            <h3 class="title">Community  <span style="color: #f9580e">Benefits</span> </h3>
                            <p style="text-align: justify">
                                Lummii's Solar Solutions offer significant community benefits by providing sustainable
                                and clean energy access, reducing reliance on fossil fuels, and empowering communities
                                through local energy generation. This initiative aims to enhance quality of life,
                                promote economic development, and contribute to environmental sustainability in
                                underserved regions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="margin-bottom: 30px; margin-top: 20px; text-align: center;" class="row">
        <div class="col-lg-12">
            <div>
                <div>
                    <h3 style="color: black;">Join Us in Lighting Up Africa!</h3>
                    <p>Be part of the movement to power Africa sustainably. With Lummii, you're not just choosing solar
                        energy; you're choosing a brighter future for the continent.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div>
                <div>
                    <h3 style="color: #f9580e;margin-top: 20px;">Explore more or get in touch with the team at Lummii.
                    </h3>
                    <br>
                    <a style="margin: 20px;" href="http://localhost:8000/technologies" class="main-btn">Explore More</a>
                    <a style="margin: 20px;" href="http://localhost:8000/contact" class="main-btn">Contact us</a>
                </div>
            </div>
        </div>
    </div>



    <!--====== End Banner section ======-->
    {{--<section class="breadcrumbs-section bg_cover" style="background-image: url(solar/solar.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcrumbs-content">
                        <h1>
                            &nbsp;
                            <br/>
                            &nbsp;
                            <br/>
                            &nbsp;
                            <br/>
                        </h1>
                        <ul class="link">
                            <li><a href="#"></a></li>
                            <li class="active"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!--====== End Breadcrumbs section ======-->
@endsection

