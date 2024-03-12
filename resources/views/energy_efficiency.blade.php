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

    </style>

    <!--====== Start breadcrumbs section ======-->
    <section class="breadcrumbs-section bg_cover" style="background-image: url('eniscope1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcrumbs-content">
                        <h1>Energy Efficiency</h1>
                        <ul class="link">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Energy Efficiency</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--====== Start Project-area section ======-->
    <section class="project-area-v1">
        <div class="project-main-section">
            <div class="project-bg bg_cover"
                 style="background-image: url('https://ik.imagekit.io/rc123/BestEnergy/wp-content/uploads/2018/03/solutions-city-energy-night-2.jpg');"></div>
            <div class="container">
                <div class="col-lg-8">
                    <div class="section-title section-white-title mb-100">
                        <h2>Treble Renewables and Double <span>Efficiency, a COP28 Objective.</span></h2>
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
                                <img src="{{asset('solar/Hse.png')}}" style="width: 400px; height: 200px"
                                     style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Powering Progress</span>
                                <h4><a href="#">One Rooftop at a Time</a></h4>
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
                                <img src="{{asset('solar/Candles.png')}}" style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Sustainable Energy for a Brighter Africa</span>
                                <h4><a href="#">Powering Africa with the Sun</a></h4>
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
                                <span class="span">Harness the Sun.</span>
                                <h4><a href="#"> Empower Your Community</a></h4>
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



@stop
