@extends('layouts.site')
@section('content')
    <!--====== Start breadcrumbs section ======-->
    <section class="breadcrumbs-section bg_cover" style="background-image: url('https://ik.imagekit.io/rc123/BestEnergy/wp-content/uploads/2018/03/solutions-city-energy-night-2.jpg');
    background-color: black;
">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcrumbs-content">
                        <h1>Case Studies</h1>
                        {{--<ul class="link">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">about us</li>
                        </ul>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br/>    <!--====== Start Case Study-standard-section ======-->
    <section class="blog-standard-section pt-120 pb-80">
        <div class="container-fluid">
            <div style="padding-bottom: 5%;" class="row">
                <div class="col-lg-8">
                    <div>
                        <div>
                            <p style="color: black;">We are proud of the impact the technology we use has across the
                                globe. Used by a network of pro-active partners in more than 50 countries, the energy
                                saving technology we use is saving clients millions of dollars and reducing millions of
                                tonnes of CO2 emissions every year.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div>
                        <div>
                            <p style="color: black;">Big savings, world wide</p>
                            <a style="color: #f9580e" href="{{url('/contact')}}">Enquire today</a>

                        </div>
                    </div>
                </div>
            </div>
            <div style="padding-bottom: 5%; text-align: center;" class="row">
                <div class="col-lg-12">
                    <div>
                        <div>
                            <h3 style="color: black;">Not Enough?</h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div>
                        <div>
                            <h3 style="color: #f9580e;">There’s plenty more where that came from! Take a look below for
                                case study examples already completed elsewhere.
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="blog-post-item mb-50">
                        <div class="post-thumbnail">
                            <img
                                src="{{asset('cases/monitoring.png')}}"
                                alt="">
                        </div>
                        <div class="entry-content">
                            <div class="post-meta d-flex justify-content-between">
                                <ul class="meta-link">
                                    <li><span><i class="icofont-user-alt-7"></i><a href="#">August 09, 2020</a></span>
                                    </li>
                                </ul>

                            </div>
                            <h3 class="title"><a target="_blank"
                                                 href="{{url('/case_studies/monitoring')}}">
                                    Eniscope Provides Monitoring to $500m Deal With USA Schools District
                                </a></h3>
                            <p>The project
                                value is obviously striking, but perhaps even more impressive is the model being offered
                                to the client - a US schools district - to make it happen.</p>
                            <a target="_blank" href="{{url('/case_studies/monitoring')}}"
                               class="main-btn">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-post-item mb-50">
                        <div class="post-thumbnail">
                            <img
                                src="{{asset('cases/Recipe.png')}}"
                                alt="">
                        </div>
                        <div class="entry-content">
                            <div class="post-meta d-flex justify-content-between">
                                <ul class="meta-link">
                                    <li><span><i class="icofont-user-alt-7"></i><a href="#">February 08, 2020</a></span>
                                    </li>
                                </ul>

                            </div>
                            <h3 class="title"><a target="_blank" href="{{url('/case_studies/recipe')}}">
                                    Innovative Model Brings Up-Front Savings to Secret Recipe
                                </a></h3>
                            <p>Asian bakery chain 'Secret Recipe' becomes the first company outside of the USA to enjoy
                                up-front energy savings.</p>
                            <a target="_blank" href="{{url('/case_studies/recipe')}}" class="main-btn">Read
                                more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-post-item mb-50">
                        <div class="post-thumbnail">
                            <img
                                src="{{asset('cases/driveshuge.png')}}"
                                alt="">
                        </div>
                        <div class="entry-content">
                            <div class="post-meta d-flex justify-content-between">
                                <ul class="meta-link">
                                    <li><span><i class="icofont-user-alt-7"></i><a href="#">May 08, 2020</a></span>
                                    </li>
                                </ul>

                            </div>
                            <h3 class="title"><a target="_blank" href="{{url('/case_studies/drivehuge')}}">
                                    Eniscope Drives Huge Industrial Savings
                                </a></h3>
                            <p>Meat processing business DIHEGO are now enjoying up to a 36% reduction in energy spend
                                thanks to Eniscope and Best.Energy Global Partner 'Lumen Energy Solutions'.</p>
                            <a target="_blank" href="{{url('/case_studies/drivehuge')}}" class="main-btn">Read
                                more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-post-item mb-50">
                        <div class="post-thumbnail">
                            <img
                                src="{{asset('cases/7eleven.png')}}"
                                alt="">
                        </div>
                        <div class="entry-content">
                            <div class="post-meta d-flex justify-content-between">
                                <ul class="meta-link">
                                    <li><span><i class="icofont-user-alt-7"></i>
                                            <a target="_blank" href="{{url('/case_studies/7eleven')}}">

                                                December 01, 2019</a>
                                        </span>
                                    </li>
                                </ul>

                            </div>
                            <h3 class="title"><a href="{{url('/case_studies/7eleven')}}">7-Eleven roll out Eniscope
                                    across all 120
                                    stores in Denmark
                                </a></h3>
                            <p>Long-standing Best.Energy Partner IQ Energy Nordic have been working with 7-Eleven in
                                their native Denmark on a 120 location roll-out. Jesper, Frank and the team have now
                                installed our flagship product Eniscope in every store in Denmark...</p>
                            <a target="_blank" href="{{url('/case_studies/7eleven')}}" class="main-btn">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-post-item mb-50">
                        <div class="post-thumbnail">
                            <img
                                src="{{asset('cases/circuits.png')}}"
                                alt="">
                        </div>
                        <div class="entry-content">
                            <div class="post-meta d-flex justify-content-between">
                                <ul class="meta-link">
                                    <li><span><i class="icofont-user-alt-7"></i><a href="#">August 09, 2018</a></span>
                                    </li>
                                </ul>

                            </div>
                            <h3 class="title"><a target="_blank"
                                                 href="{{url('/case_studies/circuit')}}">1,400+
                                    Circuits Measured at Lima Airport
                                </a></h3>
                            <p>Best.Energy Partner EnergyCloud, technical consultant to IBM, took the lead on an
                                exciting new project at Jorge Chavés airport in Peru. The client sought a solution to
                                three key issues they were experiencing, for which they had struggled to find a single,
                                end-to-end solution.</p>
                            <a target="_blank" href="{{url('/case_studies/circuit')}}"
                               class="main-btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div>
                        <div>
                            <p style="color: black;font-weight: bolder;">To manage something, you need to be able to measure it. That’s why
                                the first step in our
                                process is to make energy usage visible and accessible from a single, intuitive
                                dashboard – however large your portfolio.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div>
                        <div>
                            <p style="color: black;">Measurable Results</p>
                            <a style="color: #f9580e" href="{{url('/contact')}}">Enquire today</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
