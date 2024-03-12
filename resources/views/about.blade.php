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


    </style>
    <section class="breadcrumbs-section bg_cover" style="background-image: url('https://ik.imagekit.io/rc123/BestEnergy/wp-content/uploads/2018/03/solutions-city-energy-night-2.jpg');
    background-color: black;
">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcrumbs-content">
                        <h1>Lummii Energy Efficiency Division</h1>
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
                <div class="col-lg-6">
                    <div class="about-img mb-40">

                        <img style="padding-top:10%"
                             src="{{asset('Lummii_Energy_Logo_Mark_Full_Color_RGB_700px@72ppi.png')}}" alt="">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-box mb-40">
                        <h2>Who <span>We Are.</span></h2>
                        <p style="color: black;text-align: justify">
                            We are a next generation climate conscious energy business committed to revolutionising the
                            energy landscape by aggressively scaling solar generation and adopting energy efficiency.
                            Our vision is to be a catalyst for a sustainable and uninterrupted energy future, providing
                            reliable and fully funded solar generation and energy efficiency solutions.
                            Under our solar division we specialise in rooftop solar solutions which are then packaged in
                            a unique innovative way to create bankable & scaleable solutions per country.
                            <br/>
                            <br/>
                            Under our energy efficiency division we combine powerful hardware with intuitive cloud based
                            software and harness the power of big data, IOT and AI to provide the most comprehensive
                            energy management solution available to businesses.
                            <br>
                            <br>
                            By combining powerful hardware with intuitive cloud
                            based software we harness the power of Big Data, IoT and AI to provide the most
                            comprehensive energy management solution available
                            to businesses across various sectors including Industry, Mining, QSR, Super & Convenience
                            Stores, Commercial etc. We guarantee energy savings that directly impact your bottom line
                            whilst in the process helping you to meet your business’ climate targets.
                        </p>
                        <h4>At Lummii our mission is to bring fully funded innovative off the book every solution
                            addresses.</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: -200px" class="team-area-v1 pt-135 pb-80">
        <div class="container">
            <div class="row">
                <div align="centre" class="section-title text-center mb-60">
                    <h2>We Always Work With
                        A Great <span>Team.</span></h2>
                    <p style="color: black;font-size: 14px;text-align: justify">
                        Our CEO is a former CEO of an Investment Banking group and brings a wealth of corporate
                        leadership skills to the team. He is supported by a team which is made of highly qualified
                        professionals with vast experience across various sectors including:

                    </p>
                    <br/>

                    <table>

                        <tr>
                            <td>
                                <h3 style="text-align:center;color: black;"><i class="fa fa-bolt"></i></h3>
                            </td>
                            <td>
                                <h5 style="color: black; font-size: 17px">Electrical and Electronics Engineering</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3 style="text-align:center;color: black;"><i class="fa fa-i-cursor"></i><i
                                        class="fa fa-text-width"></i></h3>
                            </td>
                            <td>
                                <h5 style="color: black; font-size: 17px">IT,
                                    IoT & AI</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3 style="text-align:center;color: black;"><i class="fa fa-line-chart"></i></h3>
                            </td>
                            <td>
                                <h5 style="color: black; font-size: 17px">Project Management</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3 style="text-align:center;color: black;"><i class="fa fa-industry"></i></h3>
                            </td>
                            <td>
                                <h5 style="color: black; font-size: 17px">Business Development</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3 style="text-align:center;color: black;"><i class="fa fa-usd"></i></h3>
                            </td>
                            <td>
                                <h5 style="color: black; font-size: 17px">Financial Management</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3 style="text-align:center;color: black;"><i class="fa fa-book"></i></h3>
                            </td>
                            <td>
                                <h5 style="color: black; font-size: 17px">Strategic Management</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3 style="text-align:center;color: black;"><i class="fa fa-bank"></i></h3>
                            </td>
                            <td>
                                <h5 style="color: black; font-size: 17px">Investment Banking and Corporate Finance</h5>

                            </td>
                        </tr>

                    </table>


                </div>

            </div>
        </div>
    </section>


    <div class="container">
        <h2 align="center">OUR PARTNER NETWORK CLIENTS</h2>
        <br/>
        <section class="customer-logos slider ">

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
                                    src="{{asset('clients/nandos.png')}}">

            </div>

            <div class="slide">
                <img style="padding-top:50px;height: 100%;align-items: center" src="{{asset('clients/trina.png')}}">
            </div>

            <div class="slide">
                <img style="padding-top:50px;height: 100%;align-items: center" src="{{asset('clients/growatt.png')}}">
            </div>
            <div class="slide">
                <img style="padding-top:50px;height: 100%;align-items: center" src="{{asset('clients/atess.jpeg')}}">
            </div>

        </section>
    </div>


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
