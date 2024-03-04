@extends('layouts.site')
@section('content')
    <!--====== Start breadcrumbs section ======-->
    <section class="breadcrumbs-section bg_cover" style="background-image: url('contact-us-2430829_1920.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    {{--<div class="breadcrumbs-content">
                        <h1>Contact Us</h1>
                        <ul class="link">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>--}}
                </div>
            </div>
        </div>
    </section><!--====== End breadcrumbs section ======-->
    <!--====== Start Contact-page-section ======-->
    <section class="contact-page-section pt-120 pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info-list">
                        <div class="info-box d-flex align-items-start mb-45">
                            <div class="icon">
                                <i class="icofont-headphone-alt-3"></i>
                            </div>
                            <div class="info">
                                <h4>Call Us</h4>
                                <p><a href="tel:+88568426834">+4420 7118 3255</a></p>
                            </div>
                        </div>
                        <div class="info-box d-flex align-items-start mb-45">
                            <div class="icon">
                                <i class="icofont-email"></i>
                            </div>
                            <div class="info">
                                <h4>E-mail</h4>
                                <p><a href="mailto:savings@lummii.energy">savings@lummii.energy</a></p>
                            </div>
                        </div>
                        <div class="info-box d-flex align-items-start mb-45">
                            <div class="icon">
                                <i class="icofont-location-pin"></i>
                            </div>
                            <div class="info">
                                <h4>Address</h4>
                                <p>
                                    Lummii Group,<br/>
                                    71-75 Shelton Street,<br/>
                                    Covent Garden<br/>
                                    London
                                    WC2H 9JQ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form-wrapper">
                        <div class="section-title mb-50">
                            <h2>Get In Touch</h2>
                            <div class="title-span-line">
                                <span class="line line-1"></span>
                                <span class="line line-2"></span>
                                <span class="line line-3"></span>
                            </div>
                        </div>
                        <div class="contact-form">
                            <form action="{{url('/send_email')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Name:" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="email" name="email" class="form_control" placeholder="Email:" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Subject:" name="subject" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Phone:" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea class="form_control" name="message" placeholder="Message here...."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <button type="submit" class="main-btn">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <hr>
@stop
