@extends('layouts.site')

@section('content')
    <!--====== Start Banner section ======-->
    <section class="banner-area-v1">
        <div class="hero-slider-one">
            <div class="single-hero bg_cover" style="background-image: url('solar/solar_banner.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div style="margin-top: -150px;" class="hero-content">
                                <h1>
                                    Sustainable Energy for a Brighter Africa
                                </h1>
                                <h4 style="font-size: 50px;">
                                    One Rooftop at a Time! <br/> <strong
                                        style="font-weight: bold;color: black;"></strong>
                                </h4>
                                <a href="{{url('/contact')}}" class="main-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-arrows"></div>
    </section>

    <!--====== Start About Solar section ======-->
    <section style="margin-top: 30px;" class="about-area-v1 pb-120">
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

            </div>
        </div>
    </section>
    <!--====== End About section ======-->

    <section class="breadcrumbs-section bg_cover" style="background-image: url(solar/solar.jpg);">
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
    </section>

    <section class="service-details-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-details-wrapper">
                        <div class="service-content">
                            <h3 class="title">Renewables First, Efficiency Next</h3>
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
                            <h3 class="title">Innovation in Solar Financing</h3>
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
                            <h3 class="title">Maximising Efficiency with Solar Power</h3>
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
                            <h3 class="title">Community Benefits</h3>
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

    <div style="margin-bottom: 30px; margin-top: -50px; text-align: center;" class="row">
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
                    <h3 style="color: #f9580e;">Explore more or get in touch with the team at Lummii.
                    </h3>
                    <br>
                    <a href="http://localhost:8000/technologies" class="main-btn">Explore More</a>
                    <a href="http://localhost:8000/contact" class="main-btn">Contact us</a>

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

