@extends('layouts.site')
@section('content')
    <!--====== Start breadcrumbs-section ======-->
    <section class="breadcrumbs-section bg_cover" style="background-image: url('https://ik.imagekit.io/rc123/BestEnergy/wp-content/uploads/2018/03/solutions-city-energy-night-2.jpg');
    background-color: black;
">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcrumbs-content">
                        <h1>Technologies</h1>
                        {{--<ul class="link">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">about us</li>
                        </ul>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project-details-page-section pt-130">
        <div class="container">
            <div class="row project-details-wrapper">
                <div class="col-lg-12">

                    <div class="project-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-box mb-30">
                                    <h3>Eniscope</h3>
                                    <p>The Eniscope is our flagship
                                        product and the heart of our
                                        technology offering. Coming
                                        in variants of 8 or 4 ‘channels’,
                                        the Eniscope provides real-time
                                        monitoring at a granular
                                        level - down to minute-by-minute
                                        analysis.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="project-img mb-40">
                        <img style="width: 1000px;" src="{{url('/technology/enscope.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">

                    <div class="project-content">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="content-box mb-30">
                                    <h3>Air suite</h3>
                                    <p>
                                        This is a full suite of IoT technologies that form an extension of the Eniscope
                                        eco-system. Connecting to incumbent Eniscope meters, they provide
                                        additional sensory, control and monitoring functionality that is highly sought
                                        after in the market.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="project-img mb-40">
                        <img style="width: 1000px;" src="{{url('/technology/airswit.png')}}" alt="">
                    </div>

                </div>
                <div class="col-lg-12">

                    <div class="project-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-box mb-30">
                                    <h3>Integra</h3>
                                    <p>These are intelligent controllers for fixedspeed
                                        motors, suitable for almost any motor size
                                        and application - with an extensive range of special
                                        application pre-sets and adjustable controls.
                                        <br/>
                                        Integra combines world leading soft start, intelligent load
                                        monitoring, energy optimisation and controlled stopping
                                        in a smartly designed, easy to install and competitively
                                        priced unit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-img mb-40">
                        <img style="width: 1000px;" src="{{url('/technology/integra.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="project-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-box mb-30">
                                    <h3>Voltage Optimisation</h3>
                                    <p>Voltage optimisation is a solution oftenly applied as part of energy efficiency
                                        solutions. However before its application we always need to justify the choice
                                        by a cost benefit analysis which we undertake as part our solution design.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-img mb-40">
                        <img style="width: 1000px;" src="{{url('/technology/voltage.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="project-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-box mb-30">
                                    <h3>Cues</h3>
                                    <p>There is a fundamental flaw in most refrigeration
                                        units - they monitor the temperature of the air
                                        not the food. Of course, it’s the temperature of
                                        the food that matters - and air and food have
                                        very different thermal characteristics. So whilst
                                        the temperature of the air might fluctuate
                                        considerably because of, say, the door being
                                        opened - the food might remain unchanged.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-img mb-40">
                        <img style="width: 1000px;" src="{{url('/technology/cues.png')}}" alt="">
                    </div>
                </div>

                <div class="col-lg-12">

                    <div class="project-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-box mb-30">
                                    <h3>Aces</h3>
                                    <p>Air conditioning is perhaps the most mis-used
                                        amenity in the working environment and is a
                                        prime source of energy savings, particularly
                                        in warmer climates. ACES 2 allows the energy
                                        manager to control the air conditioning remotely;
                                        using a schedule, manual control or a set of
                                        logic-based parameters.

                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="project-img mb-40">
                        <img width="600" style="width: 1000px;" src="{{url('/technology/aces.png')}}" alt="">
                    </div>
                </div>


            </div>

        </div>
    </section>

@stop
