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
                        <img style="padding-top:5%" src="{{asset('cases/recipe.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="about-content-box mb-40">
                        <h2>Innovative Model Brings Up-Front Savings to Secret Recipe</h2>
                        <h4>Brief Overview</h4>
                        <p>In this case study, we take a look at an energy efficiency project with Secret Recipe – a
                            prominent chain of bakery / restaurants in South East Asia – led by Best.Energy Global
                            Partner ‘Arustrik Cekap’.</p>
                        <h4>Introduction</h4>
                        <h4>Best.Energy Global Partners Transcript</h4>
                        <p>
                            In a landmark moment for the global energy efficiency industry, Best.Energy partner Arustrik
                            is delivering an energy saving project across 100 sites that is not just shared savings, but
                            pre-paid savings.<br/>
                            It’s the first instance of this model seen anywhere outside of the USA, marking a huge
                            sea-change in the way energy efficiency could be delivered to South East Asia and beyond.
                            The project is built on substantial, dependable energy savings delivered by a combination of
                            Best.Energy technologies.

                            <br/>
                            Click the video to find out the details!
                        </p>
                        <iframe width="690" height="388" src="https://www.youtube.com/embed/zLje8guPDzM"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>


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
