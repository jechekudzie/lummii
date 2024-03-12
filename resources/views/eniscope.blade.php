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
        .nav-pills .nav-link.active {
            background-color: #f9580e; /* Set the background color for the active link */
            border-color: #f9580e; /* Set the border color for the active link */
            color: #fff; /* Set the text color for the active link */
        }
    </style>

    <!--====== Start breadcrumbs section ======-->
    <section class="breadcrumbs-section bg_cover" style="background-image: url('eniscope1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcrumbs-content">
                        <h1>Eniscope</h1>
                        <ul class="link">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Eniscope</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Start Case Study-standard-section ======-->
    <section class="service-area-v3 pt-120 pb-120">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-3 col-sm-12">
                    <div style="height: 500px;" class="service-item mb-30">
                        <div class="service-shape">
                            <div class="shape shape-1"></div>
                            <div class="shape shape-2"></div>
                            <div class="shape shape-3"></div>
                            <div class="shape shape-4"></div>
                        </div>
                        <div class="service-icon">
                            <i style="color:white;" class="fa fa-usd"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="service-details.html">Real-time data, instant energy & financial
                                    savings</a></h3>
                            <p>
                                Eniscope provides second-by-second data for your whole asset portfolio, however large
                                or widespread. All accessible from a cloud software platform.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-3 col-sm-12">
                    <div style="height: 500px;" class="service-item mb-30">
                        <div class="service-shape">
                            <div class="shape shape-1"></div>
                            <div class="shape shape-2"></div>
                            <div class="shape shape-3"></div>
                            <div class="shape shape-4"></div>
                        </div>
                        <div class="service-icon">
                            <i style="color:white;" class="fa fa-database"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="service-details.html">Cutting edge, safe & easy-to-install
                                    hardware</a></h3>
                            <p>Installed in typically less than 3 hours without disruption to your operation. Perfect
                                safety record. Small, compact design with powerful features.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-3 col-sm-12">
                    <div style="height: 500px;" class="service-item mb-30">
                        <div class="service-shape">
                            <div class="shape shape-1"></div>
                            <div class="shape shape-2"></div>
                            <div class="shape shape-3"></div>
                            <div class="shape shape-4"></div>
                        </div>
                        <div class="service-icon">
                            <i style="color:white;" class="fa fa-eye"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="service-details.html">Identify invisible energy waste and manage
                                    usage</a></h3>
                            <p>Use powerful features like automatic alarms and remote control via wireless control
                                modules to impact on-site energy usage remotely.

                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section><!--====== End service-section-area ======-->

    <section class="about-area-v2 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img mb-40">
                        <iframe width="600" height="365" src="https://www.youtube.com/embed/ZVAXDswGhQI"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-box mb-40">
                        <h2>An Introduction To Eniscope</h2>
                        <p>Watch this video to get a feel of the world’s most complete energy management system. We
                            cover the key features and how the power of Big Data and the Internet of Things (IoT) help
                            Eniscope to transform the energy profiles of facilities around the world.</p>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="about-area-v3 bg_cover pt-115 pb-120" style="background-color: black;">
        <div style="color: white;" align="center">
            <h3 style="color: white;">End-to-end energy management</h3>
            <h4 style="color: white;font-size: larger">We provide both the hardware and the software you need to manage
                energy
                effectively</h4>
        </div>
        <hr/>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul style="color: white;" class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a style="font-size: x-large;" class="nav-link active" id="pills-home-tab" data-toggle="pill"
                               href="#pills-home"
                               role="tab"
                               aria-controls="pills-home" aria-selected="true">The Hardware</a>
                        </li>
                        <li style="font-size: x-large" class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                               role="tab"
                               aria-controls="pills-profile" aria-selected="false">The Software</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="features-item text-center">
                                        <div style="padding: 3%;" class="features-content">
                                            <h3 style="text-align: left;color: white;">Hardware</h3>
                                            <p style="text-align: justify;color: white; padding: 2%;font-size: 18px">
                                                Eniscope is a lightweight and compact, plug-and-play system. Typically
                                                taking three hours to install on-site, with minimal disruption to your
                                                workflow, our hardware is easy to integrate and offers a perfect safety
                                                record.
                                            </p>
                                            <p style="text-align: justify;color: white; padding: 2%;font-size: 18px">
                                                At the core of our system, we offer 8 three-phase metering points per
                                                Eniscope hub, with physical connectivity for pulse and temperature
                                                inputs, as well as wireless connectivity to IoT devices and sensors.
                                                That level of connectivity means we can seamlessly connect to incumbent
                                                meters and, with our API, we can integrate easily with your BMS or CAFM
                                                solution too.
                                            </p>
                                            <p style="text-align: justify;color: white; padding: 2%;font-size: 18px">
                                                Our own standalone wireless IoT sensors include temperature, occupancy,
                                                gas, water and much more – to make sure your data is always placed in
                                                context.
                                            </p>
                                            <p style="text-align: justify;color: white; padding: 2%;font-size: 18px">
                                                Eniscope is easy and quick to install, versatile, pinpoint accurate and
                                                for many asset managers around the world, indispensable.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <table>

                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;"><i style="color:white;"
                                                                                               class="fa fa-eye-slash"></i>
                                                </h1>
                                            </td>
                                            <td>
                                                <p style="color: white; font-size: large">
                                                    Easy and safe to install with minimal disruption
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;"><i style="color:white;"
                                                                                               class="fa fa-bar-chart-o"></i>
                                                </h1>
                                            </td>
                                            <td>
                                                <p style="color: white; font-size: large">
                                                    8 x three-phase metering points
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;"><i style="color:white;"
                                                                                               class="fa fa-balance-scale"></i>
                                                </h1>
                                            </td>
                                            <td>
                                                <p style="color: white; font-size: large">
                                                    Lightweight and compact at 235mm x 145mm x 60mm
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;"><i style="color:white;"
                                                                                               class="fa fa-server"></i>
                                                </h1>
                                            </td>
                                            <td>
                                                <p style="color: white; font-size: large">
                                                    Integral communications hub and server
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;"><i style="color:white;"
                                                                                               class="fa fa-feed"></i>
                                                </h1>
                                            </td>
                                            <td>
                                                <p style="color: white; font-size: large">
                                                    Better than 1% voltage accuracy
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;"><i style="color:white;"
                                                                                               class="fa fa-plus-circle"></i>
                                                </h1>
                                            </td>
                                            <td>
                                                <p style="color: white; font-size: large">
                                                    Wireless IoT sensors for temperature and pulse
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;"><i style="color:white;"
                                                                                               class="fa fa-desktop"></i>
                                                </h1>
                                            </td>
                                            <td>
                                                <p style="color: white; font-size: large">
                                                    External remote-control hub for easy access
                                                </p>
                                            </td>
                                        </tr>

                                    </table>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12">

                                    <img style="padding-top: 70%; width: 300px"
                                         src="{{asset('eniscope-product-render-2.png')}}">

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="features-item text-center">
                                        <div style="padding: 3%;" class="features-content">
                                            <h3 style="text-align: left;color: white;">Software</h3>
                                            <p style="text-align: justify;color: white; padding: 2%;font-size: 18px">
                                                View your data anywhere in real-time using Eniscope Analytics.
                                            </p>
                                            <p style="text-align: justify;color: white; padding: 2%;font-size: 18px">
                                                Access our cloud-system to easily manipulate data and take advantage of
                                                intelligent alarms to inform your actions on site.
                                            </p>
                                            <p style="text-align: justify;color: white; padding: 2%;font-size: 18px">
                                                With one intuitive analytics platform, you don’t have to live with
                                                disparate, scattered information sources anymore. Eniscope does it all
                                                and reports to you in an intuitive, simple way.
                                            </p>
                                            <p style="text-align: justify;color: white; padding: 2%;font-size: 18px">
                                                Our platform is built for scaling and can handle hundreds of assets/sites
                                                at once – all processed and reported on in real-time within a single
                                                platform that you can access on the move, including via our mobile app.
                                            </p>
                                            <p style="text-align: justify;color: white; padding: 2%;font-size: 18px">
                                                And with our new range of wireless control modules you can now influence
                                                what happens at your facilities remotely. Notice an area with
                                                 lights on? No problem – just switch them off!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <table>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;"><i style="color:white;"
                                                                                               class="fa fa-calculator"></i>
                                                </h1>
                                            </td>
                                            <td>
                                                <p style="color: white; font-size: large">
                                                    One platform, multiple sites
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;"><i style="color:white;"
                                                                                               class="fa fa-mobile"></i>
                                                </h1>
                                            </td>
                                            <td>
                                                <p style="color: white; font-size: large">
                                                    Mobile app for easy access
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;"><i style="color:white;"
                                                                                               class="fa fa-laptop"></i>
                                                </h1>
                                            </td>
                                            <td>
                                                <p style="color: white; font-size: large">
                                                    Remote control capabilities
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;"><i style="color:white;"
                                                                                               class="fa fa-times"></i>
                                                </h1>
                                            </td>
                                            <td>
                                                <p style="color: white; font-size: large">
                                                    Multiple data sources, one dashboard
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;"><i style="color:white;"
                                                                                               class="fa fa-ravelry"></i>
                                                </h1>
                                            </td>
                                            <td>
                                                <p style="color: white; font-size: large">
                                                    Second-by-second data delivery
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;"><i style="color:white;"
                                                                                               class="fa fa-snowflake-o"></i>
                                                </h1>
                                            </td>
                                            <td>
                                                <p style="color: white; font-size: large">
                                                    API for easy integration
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 style="text-align:center;color: white;"><i style="color:white;"
                                                                                               class="fa fa-eye"></i>
                                                </h1>
                                            </td>
                                            <td>
                                                <p style="color: white; font-size: large">
                                                    Verify other energy saving technologies
                                                </p>
                                            </td>
                                        </tr>

                                    </table>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12">

                                    <img style="padding-top: 70%; width: 300px"
                                         src="{{asset('eniscope_1.png')}}">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section><!--====== End About Section ======-->
    <hr/>
    <section class="about-area-v2 pb-80">
        <div class="container">
            <div class="row">


                <div class="col-lg-6">
                    <div class="about-img mb-40">
                        <img src="{{asset('public.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-box mb-40">
                        <h2>Public Display</h2>
                        <p>Show off your performance in real-time to staff, tenants and other stakeholders with
                            bespoke-designed displays..
                        </p>
                        <p>
                            Our displays allow you to create awareness and modify behaviour by clearly, visually
                            communicating key performance metrics, targets and progress. It’s an excellent way of
                            demonstrating your commitment to energy conservation.
                        </p>
                        <p>
                            These displays can be strategically positioned around a site to provide a crucial
                            incentive to change their behaviour. We can integrate leader boards and competitive aspects,
                            to give stakeholders that extra push to make a difference (to your carbon footprint and your
                            bills!).
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-area-v2 pb-80">
        <div class="container">
            <div class="row">
                <div align="center" style="text-align: center; padding-bottom: 5%;" class="col-lg-12">
                    <h3>The Eniscope eco-system</h3>
                    <p>Explore the functionality of our holistic solution to energy monitoring and management.</p>
                </div>
                <div align="center" class="col-lg-12">
                    <div class="about-img mb-40">
                        <img class="img-fluid" src="{{asset('ecosystem.png')}}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="about-area-v2 pb-80">
        <div class="container">
            <div class="row">
                <div align="center" style="text-align: center; padding-bottom: 5%;" class="col-lg-12">
                    <h3>Enjoy the benefits too</h3>
                    <p>Start your journey by filling in a few details below and downloading your free brochure.</p>
                </div>

                <div class="col-lg-6">
                    <div class="download__image"
                         style="background-image:url(https://ik.imagekit.io/rc123/BestEnergy/wp-content/uploads/2018/03/eniscope-brochure-mock-1.jpg)"></div>
                </div>
            </div>

            <div style="padding-bottom: 5%;" class="row">
                <div class="col-lg-8">
                    <div>
                        <div>
                            <p style="color: black;">Want to know more about us and how we can help businesses like
                                yours? There are a number of ways you can get in touch. We’re happy to answer any
                                questions you may have over the phone, via email or over live chat.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div>
                        <div>
                            <p style="color: black;">Request more information</p>
                            <a style="color: #f9580e" href="{{url('/contact')}}">Enquire today</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
