@extends('layouts.site')


@section('content')

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
    <br/>
    <section class="about-area-v2 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div align="center" class="about-img mb-40">
                        <img style="padding-top:5%" src="{{asset('cases/circuits.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="about-content-box mb-40">
                        <h2>Jorge Chavez Airport, Peru</h2>
                        <h4>Brief Overview</h4>
                        <p>Best.Energy Partner EnergyCloud, technical consultant to IBM, took the lead on an exciting
                            new project at Jorge Chavés airport in Peru. The client – Peru’s largest airport – sought a
                            solution to three key issues they were experiencing, for which they had struggled to find a
                            single, end-to-end solution.
                        </p>
                        <h4>The Solution</h4>

                        <p>
                            EnergyCloud provided the technical support for IBM Smart Energy Management Services (SEMS),
                            to demonstrate the power of the Eniscope, focusing on the chiller systems. With 22% energy
                            savings immediately identified after a fast, seamless installation – the Client decided to
                            proceed with a full rollout.
                            <r/>
                            Eniscope is now used to monitor 1,417 circuits across the airport – feeding information back
                            to the EnergyCloud energy management team. They provide energy management as an on-going
                            service and, with minute-by-minute information at their finger tips, they can continually
                            identify energy saving opportunities across the huge facility.<br/>
                            That same granular energy data has also been harnessed to provide a smart maintenance
                            system, allowing the airport’s FM company to keep critical systems running, and to provide
                            accurate tenant billing, greatly reducing administration costs, disputes and errors.

                        </p>
                        <h4>What Next</h4>
                        <p>
                            Lima Airport have been so impressed with the work of EnergyCloud, they have committed to a
                            120 month project. They appreciate the ability of the skilled energy management team to
                            continue to make savings over a long period. With behaviour modification strategies already
                            paying dividends, the team are now exploring a raft of other energy-saving opportunities
                            including LED lighting and environmental sensors.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <hr/>
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
