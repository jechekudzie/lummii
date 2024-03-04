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
                        <h1>About Lummii Energy</h1>
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

                        <img style="padding-top:10%" src="{{asset('Lummii_Energy_Logo_Mark_Full_Color_RGB_700px@72ppi.png')}}" alt="">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-box mb-40">
                        <h2>Who We Are</h2>
                        <p>Lummii Energy is a global energy efficiency solutions provider based in the United Kingdom
                            and with operations in UK, USA, Europe and Southern Africa. Lummii Energy was born out of a
                            partnership with BEST Energy, a renowned UK energy efficiency company that has been
                            revolutionising the energy efficiency market across more than 50 countries since 2006. In a
                            world where energy challenges are growing ranging from the generation type’s impact on
                            climate change, energy security and spiralling costs, Best Energy sought to find the best
                            energy source out there which is easier to access than Wind, cheaper than Solar and Cleaner
                            than geothermal energy and the answer was ENERGY EFFICIENCY. </p>
                        <p>
                            The greatest challenge in achieving energy efficiency has been that energy wastage is
                            invisible and unless you make the invisible visible you can not manage it. Lummii Energy
                            combines the best in hardware and software to measure on a second by second energy drawn
                            across multiple circuits and posts this data onto a cloud platform from where powerful
                            analytics are then performed to identify potential areas of energy savings which are then
                            implemented resulting in energy savings ranging from 18 to 40%.
                        </p>
                        <p>
                            Our energy saving solutions and the technology behind have been tested for years and we have
                            total confidence in them. To that extent we don't ask you to make a capital outlay, instead
                            the solution is paid for through demonstrated energy savings which will be split between
                            your company and ourselves over an agreed contract period.
                            <strong style="font-weight: bolder;">Our ethos is clear and simple -
                                NO SAVINGS NO PAYMENT</strong>
                        </p>
                        <p>Our solutions are used by top brand institutions across the globe including:</p>

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
                                <h3 style="text-align:center;color: black;"><i class="fa fa-bolt"></i> </h3>
                            </td>
                            <td>
                                <h5 style="color: black; font-size: 17px">Electrical and Electronics Engineering</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3 style="text-align:center;color: black;"><i class="fa fa-i-cursor"></i><i class="fa fa-text-width"></i></h3>
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


    <div style="margin-top: -100px" class="container">
        <h2 align="center">OUR PARTNER NETWORK CLIENTS</h2>
        <br/>
        <section class="customer-logos slider">

            <div class="slide"><img style="height: 100%;align-items: center" src="{{asset('clients/mercedes.png')}}"></div>
            <div class="slide"><img style="height: 100%;align-items: center" src="{{asset('clients/kfc.png')}}"></div>
            <div class="slide"><img style="height: 100%;align-items: center" src="{{asset('clients/rolls.png')}}"></div>
            <div class="slide"><img style="height: 100%;align-items: center" src="{{asset('clients/mcdonalds.png')}}"></div>
            <div class="slide"><img style="padding-top:50px;height: 100%;align-items: center" src="{{asset('clients/7eleven.png')}}"></div>
            <div class="slide"><img style="padding-top:50px;height: 100%;align-items: center" src="{{asset('clients/britvic.png')}}"></div>
            <div class="slide"><img style="padding-top:50px;height: 100%;align-items: center" src="{{asset('clients/gsk.jpg')}}"></div>
            <div class="slide"><img style="padding-top:50px;height: 100%;align-items: center" src="{{asset('clients/lap.png')}}"></div>
            <div class="slide"><img style="padding-top:50px;height: 100%;align-items: center" src="{{asset('clients/nandos.png')}}"></div>

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
