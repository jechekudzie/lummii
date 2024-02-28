@extends('layouts.site')
@section('content')
    <!--====== Start breadcrumbs section ======-->

    <section class="project-area-v1">
        <div class="project-main-section">
            <div class="project-bg bg_cover" style="background-image: url('solutions1.jpg');width: 100%;"></div>
            <div class="container">
                <div class="col-lg-12">
                    <div class="section-title section-white-title mb-100">
                        <h2>The best energy is <span>efficiency.</span></h2>
                        <p><span style="font-size: 25px;color: white;">We bring you 10-40% Cost Savings, Granular Asset Visibility & Migration to IoT all at
                                <br/><strong style="font-weight: bold;color: #f9580e;">ZERO CAPITAL OUTLAY</strong> from you. Instead we use the savings we achieve to fund your Efficiency KPIs.</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="">
            <div class="container">
                <div class="row " style="padding: 3%;">
                    <div style="padding: 3%;" class="col-lg-4">
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
                    <div style="padding: 3%;" class="col-lg-4">
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
                    <div style="padding: 3%;" class="col-lg-4">
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
                    <div style="padding: 3%;" class="col-lg-4">
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
                    <div style="padding: 3%;" class="col-lg-4">
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
                    <div style="padding: 3%;" class="col-lg-4">
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
                    <div style="padding: 3%;" class="col-lg-4">
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

                <div style="padding-top: 5%;font-size: large;" class="row">
                    <div class="col-lg-4" style="padding-bottom: 5%;">
                        <div>
                            <div>
                                <p style="color: #f9580e;">Your new favorite tool</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div>
                            <div>
                                <p style="color: black;">Lummii.Energy products provide best-in-class solutions to key
                                    problems facing Commercial & Industrial Asset Managers, Energy Managers, Facilities
                                    & Properties Managers and even Governments experiencing generation deficits across
                                    the globe.
                                    Use the below links to explore the best answer to your
                                    frustrations:</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding-top: 5%; text-align: center;" class="row">
                    <div class="col-lg-12">
                        <div>
                            <div>
                                <h3 style="color: black;">Looking for something?</h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div>
                            <div>
                                <h3 style="color: #f9580e;">Explore more or get in touch with the team at Lummii.
                                </h3>
                                <br/>
                                <a href="{{url('/technologies')}}" class="main-btn">Explore More</a>
                                <a href="{{url('/contact')}}" class="main-btn">Contact us</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr/>
    <br/>
    <br/>


@stop
