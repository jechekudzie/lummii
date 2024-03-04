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
            float: l;
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
                                    Intuitive Energy Management
                                </h1>
                                <h4 style="font-size: 30px;">
                                    Energy Efficiency & Carbon Footprint Reduction with <strong
                                        style="font-weight: bold;color: #f9580e;">ZERO CAPITAL OUTLAY</strong> From You.
                                </h4>
                                <a href="{{url('/solutions')}}" class="main-btn">Exploring More</a>
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
                <div class="col-lg-6">
                    <div class="">
                        <img style="width: 785px;height: 500px;margin-left: 10px; margin-top: 30px;" src="{{asset('solar/about.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-box">
                        <div class="section-title mb-35">
                            <h2>About <span>Lummii</span></h2>
                        </div>
                        <p style="color: black;text-align: justify">By combining powerful hardware with intuitive cloud based software we harness the power of
                            Big Data, IoT and AI to provide the most comprehensive energy management solution available
                            to businesses across various sectors including Industry, Mining, QSR, Super & Convenience
                            Stores, Commercial etc. We guarantee energy savings that directly impact your bottom line
                            whilst in the process helping you to meet your business’ climate targets.

                        <p style="color: black;text-align: justify">
                            In a world where energy challenges are growing ranging from the generation type’s impact on
                            climate change, energy security and spiralling costs, Lummii Energy brings the BEST energy
                            to your business which is ENERGY EFFICIENCY; it’s easier to access than wind and solar,
                            cleaner than geothermal and yet is the cheapest to access. Statistics say that 43% of the
                            energy produced today is wasted and if we
                            could save this 43% we could turnoff all coal power plants in the world.
                        </p>
                        <h4>At Lummii our mission is to bring Energy Efficiency to your business with ZERO Capital
                            outlay from you.</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End About section ======-->

    <!--====== Start About Solar section ======-->
    <section class="about-area-v1 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div style="margin-left: -20px;" >
                        <div class="section-title mb-3">
                            <h2>Lummii Solar <span class="thin">Powering Africa with the Sun.</span></h2>
                        </div>

                        <p style="color: black;text-align: justify">Introducing Lummii's Solar Division, dedicated to unlocking Africa's vast solar potential
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
                    <div>
                        <img style="width: 785px;height: 500px;margin-top: 80px;" src="{{asset('solar/about1.jpg')}}" alt="">
                    </div>
                </div>

                <div style="margin-left: -20px;margin-top: 20px;" class="col-lg-8">
                    <!-- Read More -->
                    <a href="{{url('/renewable-energy')}}" class="main-btn">Learn More About Sustainable Energy for a Brighter Africa</a>
               </div>
            </div>
        </div>
    </section>
    <!--====== End About section ======-->


    <!--====== Start Project-area section ======-->
    <section class="project-area-v1">
        <div class="project-main-section">
            <div class="project-bg bg_cover"
                 style="background-image: url('https://ik.imagekit.io/rc123/BestEnergy/wp-content/uploads/2018/03/solutions-city-energy-night-2.jpg');"></div>
            <div class="container">
                <div class="col-lg-8">
                    <div class="section-title section-white-title mb-100">
                        <h2>The best energy is <span>efficiency.</span></h2>
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
                                <img src="{{asset('industrial.jpg')}}" style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Reduce Energy Waste (Industrial)</span>
                                <h4><a href="#">Industrial Efficiency</a></h4>
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
                                <img src="{{asset('supermarket.jpg')}}" style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Reduce Energy Waste</span>
                                <h4><a href="#">Supermarkets</a></h4>
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
    </section><!--====== End Project-area section ======-->

    <section class="about-area-v3 bg_cover pt-115 pb-120" style="background-color: black;">
        <div class="container">
            <h1 style="text-align: center;color: white;">The SMARRT Approach</h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="about-content-box">
                                        <div class="section-title section-white-title mb-30">
                                            <span class="span">ISO 50001 Energy Management</span>
                                        </div>
                                        <p style="font-size: large; padding: 2%;text-align: justify">
                                            This defines our unique approach to energy management which we use across
                                            the globe. It is the ethos that standardises all our operations with a
                                            single quality of service and guarantees our clients the best possible
                                            energy management standards.
                                        </p>
                                        <p style="font-size: large; padding: 2%;text-align: justify">
                                            SMARRT was put together with the global standard for energy management ISO
                                            50001 in mind. ISO 50001 is the benchmark and process all companies should
                                            adhere to when managing their energy consumption. We’ve codified its
                                            principles into an easy to understand acronym and we take its global
                                            implementation seriously.
                                        </p>
                                    </div>

                                    <hr/>
                                    <table>

                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;">S</h1>
                                            </td>
                                            <td>
                                                <h5 style="color: white; font-size: large">Survey</h5>
                                                <p style="color: white; font-size: large">
                                                    Fast on-site analysis using our proprietary mobile app.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;">M</h1>
                                            </td>
                                            <td>
                                                <h5 style="color: white; font-size: large">Monitor</h5>
                                                <p style="color: white; font-size: large">
                                                    Accurate energy usage (and wastage) tracking with Eniscope.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;">A</h1>
                                            </td>
                                            <td>
                                                <h5 style="color: white; font-size: large">Analyse</h5>
                                                <p style="color: white; font-size: large">
                                                    Real-time trend analysis in the cloud, via our software platform.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;">R</h1>
                                            </td>
                                            <td>
                                                <h5 style="color: white; font-size: large">Reduce</h5>
                                                <p style="color: white; font-size: large">
                                                    Saving opportunity analysis alongside retrofit technologies. </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;">R</h1>
                                            </td>
                                            <td>
                                                <h5 style="color: white; font-size: large">Review</h5>
                                                <p style="color: white; font-size: large">
                                                    Comprehensive reporting and granular analysis to inform decision
                                                    making.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;">T</h1>
                                            </td>
                                            <td>
                                                <h5 style="color: white; font-size: large">Target</h5>
                                                <p style="color: white; font-size: large">
                                                    Verifying success and target setting. The keys to sustained
                                                    performance.
                                                </p>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                                <div class="col-lg-4">
                                    <div class="about-img">
                                        <img src="{{asset('smart.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section><!--====== End About Section ======-->

    <section class="features-area-v1 pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="features-item text-center">
                        <div style="padding: 3%;" class="features-content">
                            <h3 style="text-align: left">Get to know Eniscope</h3>
                            <p style="text-align: justify;color: black; padding: 2%;font-size: 18px">
                                The cutting-edge device that allows it all to happen, Eniscope is a ‘best-in-class’
                                energy management system. Actually, it’s more than that, it is a gateway to data
                                visibility and a huge step towards site energy optimisation.
                            </p>
                            <p style="text-align: justify;color: black; padding: 2%;font-size: 18px">
                                Using Big Data drawn from device and circuit level inputs, existing meters and IoT
                                sensors, Eniscope provides a granular breakdown of exactly how, when and where you are
                                using (and wasting) energy.
                            </p>
                            <p style="text-align: justify;color: black; padding: 2%;font-size: 18px">
                                That applies to a single site, or a full portfolio; with all that information ported
                                to an intuitive software platform. And with standalone sensors available including
                                temperature, occupancy, gas, water and much more – your data is always placed in
                                context.
                            </p>
                            <p style="text-align: justify;color: black; padding: 2%;font-size: 18px">
                                Eniscope is easy and quick to install, versatile, pinpoint accurate and – for many asset
                                managers around the world, indispensable.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <table>

                        <tr>
                            <td>
                                <h1 style="text-align:center;color: black;"><i class="fa fa-clock-o"></i></h1>
                            </td>
                            <td>
                                <p style="color: black; font-size: large">
                                    Second by second energy consumption data
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h1 style="text-align:center;color: black;"><i class="fa fa-money"></i></h1>
                            </td>
                            <td>
                                <p style="color: black; font-size: large">
                                    Clearly verify capital project energy
                                    savings
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h1 style="text-align:center;color: black;"><i class="fa fa-eye"></i></h1>
                            </td>
                            <td>
                                <p style="color: black; font-size: large">
                                    Identify energy leaks and energy saving
                                    opportunities
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h1 style="text-align:center;color: black;"><i class="fa fa-snowflake-o"></i></h1>
                            </td>
                            <td>
                                <p style="color: black; font-size: large">
                                    Easily integrate with your CAFM
                                    or
                                    BMS via our API
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h1 style="text-align:center;color: black;"><i class="fa fa-database"></i></h1>
                            </td>
                            <td>
                                <p style="color: black; font-size: large">
                                    Cutting-edge, easy-to-install
                                    on-site
                                    hardware
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h1 style="text-align:center;color: black;"><i class="fa fa-tachometer"></i></h1>
                            </td>
                            <td>
                                <p style="color: black; font-size: large">
                                    Infinately scalable solution. One
                                    dashboard, multiple sites.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h1 style="text-align:center;color: black;"><i class="fa fa-search-plus"></i></h1>
                            </td>
                            <td>
                                <p style="color: black; font-size: large">
                                    Expose energy-abusing resources
                                    and
                                    equipment.
                                </p>
                            </td>
                        </tr>

                    </table>

                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">

                    <img style="padding-top: 70%;" src="{{asset('eniscope_1.png')}}">

                </div>
            </div>
        </div>
    </section>
    <!--====== End FEatures section ======-->

    <div class="container">
        <h2 align="center">OUR PARTNER NETWORK CLIENTS</h2>
        <br/>
        <section class="customer-logos slider">

            <div class="slide"><img style="height: 100%;align-items: center" src="{{asset('clients/mercedes.png')}}">
            </div>
            <div class="slide"><img style="height: 100%;align-items: center" src="{{asset('clients/kfc.png')}}"></div>
            <div class="slide"><img style="height: 100%;align-items: center" src="{{asset('clients/rolls.png')}}"></div>
            <div class="slide"><img style="height: 100%;align-items: center" src="{{asset('clients/mcdonalds.png')}}">
            </div>
            <div class="slide"><img style="padding-top:50px;height: 100%;align-items: center"
                                    src="{{asset('clients/7eleven.png')}}"></div>
            <div class="slide"><img style="padding-top:50px;height: 100%;align-items: center"
                                    src="{{asset('clients/britvic.png')}}"></div>
            <div class="slide"><img style="padding-top:50px;height: 100%;align-items: center"
                                    src="{{asset('clients/gsk.jpg')}}"></div>
            <div class="slide"><img style="padding-top:50px;height: 100%;align-items: center"
                                    src="{{asset('clients/lap.png')}}"></div>
            <div class="slide"><img style="padding-top:50px;height: 100%;align-items: center"
                                    src="{{asset('clients/nandos.png')}}"></div>

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
    </section><!--====== End CTA section ======-->

    <hr/>

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
@stop
