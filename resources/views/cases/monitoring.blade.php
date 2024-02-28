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
                        <img style="padding-top:5%"   src="{{asset('cases/monitoring.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="about-content-box mb-40">
                        <h2>Eniscope Provides Monitoring to $500m Deal With USA Schools District</h2>
                        <h4>Brief Overview</h4>
                        <p>Best.Energy are proud to be part of a huge and rapidly evolving case study. The project value
                            is obviously striking, but perhaps even more impressive is the model being offered to the
                            client - a US schools district - to make it happen.</p>
                        <h4>Introduction</h4>
                        <h4>Best.Energy Global Partners Transcript</h4>
                        <p>
                            Hillsborough County Schools District is one of the largest of its kind in the USA. Square
                            footage wise, the size of Rhode Island. So their energy bill is correspondingly massive.
                            Without a budget to invest in energy-saving solutions, how could they hope to reduce these
                            costs? <br/>
                            Working with Best.Energy's leading technology 'Eniscope', the multi-company project team
                            have found a way. Together, we have managed to save the client $8m per year - money which
                            can be put back into the school system to benefit the kids.
                            Watch this video to get a feel for the project and how those savings have been made,
                            verified and sustained with Eniscope. <br/>
                            It’s the first instance of this model seen anywhere outside of the USA, marking a huge
                            sea-change in the way energy efficiency could be delivered to South East Asia and beyond.
                            The project is built on substantial, dependable energy savings delivered by a combination of
                            Best.Energy technologies.
                            <br/>
                            Click the video to find out the details!
                        </p>
                        <iframe width="690" height="388" src="https://www.youtube.com/embed/EZBbvQu7BXM"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <p>
                            "Following the success of this project, Best.Energy are working directly with Generate
                            Capital and their service engineers McKinstry to facilitate further opportunities within the
                            many schools districts that wish to benefit from this exceptional offering. Best.Energy,
                            with the Eniscope and supporting suite of products, continue to service Hillsborough and are
                            now the de-facto, go-to providers for this exciting opportunity. And that remarkable
                            ‘prepaid energy savings’ model continues to ensure that clients receive a share of the
                            savings our technologies create, up-front."
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
