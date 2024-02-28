@extends('layouts.site')

@section('content')
    <!--====== Start Banner section ======-->
    <section class="banner-area-v1">
        <div class="hero-slider-one">
            <div class="single-hero bg_cover" style="background-image: url('banner.jpeg');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <h1>
                                    Intuitive Energy Management
                                </h1>
                                <h4>Energy Efficiency & Sustainability
                                </h4>
                                <a href="#" class="main-btn">Exploring More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-arrows"></div>
    </section><!--====== End Banner section ======-->
    <!--====== Start About section ======-->
    <section style="padding:5%;" class="about-area-v1 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img-box">
                        <img src="{{asset('monitor.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-box">
                        <div class="section-title mb-35">
                            <h2>About <span>Lummii</span></h2>
                        </div>
                        <p>By combining powerful hardware with intuitive cloud based software we harness the power of
                            Big Data, IoT and AI to provide the most comprehensive energy management solution available
                            to businesses across various sectors including Industry, Mining, QSR, Super & Convenience
                            Stores, Commercial etc. We guarantee energy savings that directly impact your bottom line
                            whilst in the process helping you to meet your business’ climate targets.

                        <p>
                            In a world where energy challenges are growing ranging from the generation type’s impact on
                            climate change, energy security and spiralling costs, Lummii Energy brings the BEST energy
                            to your business which is ENERGY EFFICIENCY; its cleaner than wind and solar and yet is the
                            cheapest to access. Statistics say that 43% of the energy produced today is wasted and if we
                            could save this 43% we could turnoff all coal power plants in the world.
                        </p>
                        <h4>At Lummii our mission is to bring Energy Efficiency to your business with ZERO Capital
                            outlay from you.</h4>

                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End About section ======-->
    <!--====== Start Project-area section ======-->
    <section class="project-area-v1">
        <div class="project-main-section">
            <div class="project-bg bg_cover"
                 style="background-image: url('https://ik.imagekit.io/rc123/BestEnergy/wp-content/uploads/2018/03/solutions-city-energy-night-2.jpg');"></div>
            <div class="container">
                <div class="col-lg-8">
                    <div class="section-title section-white-title mb-100">
                        <h2>The best energy is <span>efficiency.</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-slide-wrapper">
            <div class="container">
                <div class="row project-slide-one">
                    <div class="col-lg-4">
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
                    <div class="col-lg-4">
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
                    <div class="col-lg-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{asset('commercial.jpg')}}" style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Reduce Energy Waste</span>
                                <h4><a href="#">QSR</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{asset('commercial.jpg')}}" style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Reduce Energy Waste</span>
                                <h4><a href="#">Stores</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
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
                    <div class="col-lg-4">
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
                    <div class="col-lg-4">
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

                    {{--<div class="col-lg-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{asset('billing.jpg')}}" style="width: 400px; height: 200px" alt="">

                            </div>
                            <div class="project-info">
                                <span class="span">Accurately Bill Your Tenants</span>
                                <h4><a href="#">Tenants Billing</a></h4>
                            </div>
                        </div>
                    </div>--}}


                </div>
            </div>
        </div>
    </section><!--====== End Project-area section ======-->

    <section class="about-area-v3 bg_cover pt-115 pb-120" style="background-color: black;">
        <div class="container">
            <h1 style="text-align: center;color: white;">The SMARRT Approach</h1>
            <div class="row">
                <div class="col-lg-12">
                    <ul style="color: white;'" class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                               role="tab"
                               aria-controls="pills-home" aria-selected="true">An Introduction</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                               role="tab"
                               aria-controls="pills-profile" aria-selected="false">A Smart Approach</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                               role="tab"
                               aria-controls="pills-contact" aria-selected="false">Case Study</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="about-content-box">
                                        <div class="section-title section-white-title mb-30">
                                            <span class="span">Who We Are</span>
                                        </div>
                                        <p>
                                            Lummii Energy, globally with its HQ in UK and having operations in UK, USA,
                                            Europe and Southern Africa, is a manufacturer and supplier in the global
                                            energy
                                            monitoring and management industry. We specialise in producing advanced
                                            equipment that harnesses the power of Big Data, AI and IoT.

                                        </p>
                                        <p>
                                            We work with Facilities Managers, Property Managers, Utilities and Energy
                                            Brokers around the world to give them control over the energy profiles of
                                            the buildings they manage – saving energy, reducing spend and increased
                                            autonomy.
                                        </p>
                                    </div>
                                    <div class="faq-area">
                                        <div class="faq-wrapper">
                                            <h3 style="color: white;">Why You need us.</h3>
                                            <div class="accordion" id="accordiontwo">
                                                <div class="card mb-30">
                                                    <a class="collapsed card-header" id="heading1" href="#"
                                                       data-toggle="collapse" data-target="#collapse1"
                                                       aria-expanded="true"
                                                       aria-controls="collapse1">
                                                        Increasing Reduction Targets<span class="toggle_btn"></span>
                                                    </a>
                                                    <div id="collapse1" class="collapse show" aria-labelledby="heading1"
                                                         data-parent="#accordiontwo">
                                                        <div class="card-body">
                                                            <p>You’re under increasing pressure to hit top-down energy
                                                                reduction targets.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-30">
                                                    <a class="collapsed card-header" id="heading2" href="#"
                                                       data-toggle="collapse" data-target="#collapse2"
                                                       aria-expanded="false"
                                                       aria-controls="collapse2">
                                                        Inefficient Building Maintenance<span
                                                            class="toggle_btn"></span>
                                                    </a>
                                                    <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                                         data-parent="#accordiontwo">
                                                        <div class="card-body">
                                                            <p>
                                                                You need to get control of inefficient building
                                                                maintenance
                                                                schedules.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-30">
                                                    <a class="collapsed card-header" id="heading3" href="#"
                                                       data-toggle="collapse" data-target="#collapse3"
                                                       aria-expanded="false"
                                                       aria-controls="collapse3">
                                                        Accurate Tenant Billing<span
                                                            class="toggle_btn"></span></a>
                                                    <div id="collapse3" class="collapse" aria-labelledby="heading3"
                                                         data-parent="#accordiontwo">
                                                        <div class="card-body">
                                                            <p>
                                                                You need to accurately bill your tenants to avoid
                                                                dispute
                                                                and unfairness..</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-30">
                                                    <a class="collapsed card-header" id="heading4" href="#"
                                                       data-toggle="collapse" data-target="#collapse4"
                                                       aria-expanded="false"
                                                       aria-controls="collapse4">
                                                        Poor Data Visibility<span class="toggle_btn"></span></a>
                                                    <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                                         data-parent="#accordiontwo">
                                                        <div class="card-body">
                                                            <p>
                                                                You have limited energy data and what you have is
                                                                difficult
                                                                to analyse..</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-5">
                                    <div class="about-img">
                                        <iframe width="692" height="390" src="https://www.youtube.com/embed/xzNb5gZWpVg"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="about-content-box">
                                        <div class="section-title section-white-title mb-30">
                                            <span class="span">ISO 50001 Energy Management</span>
                                        </div>
                                        <p>As well as providing the hardware and software our clients need to monitor
                                            and manage energy consumption within their buildings, we also provide
                                            consultancy via a global network of expert partners.
                                        </p>
                                        <p>
                                            Each partner helps our clients identify saving opportunities revealed by our
                                            data. And each partner conforms to a uniform set of standards (SMARRT):
                                        </p>
                                    </div>
                                    <div class="faq-area">
                                        <div class="faq-wrapper">
                                            <div class="accordion" id="accordiontwo">
                                                <div class="card mb-30">
                                                    <a class="collapsed card-header" id="heading1" href="#"
                                                       data-toggle="collapse" data-target="#collapse1"
                                                       aria-expanded="true"
                                                       aria-controls="collapse1">
                                                        Survery<span class="toggle_btn"></span>
                                                    </a>
                                                    <div id="collapse1" class="collapse show" aria-labelledby="heading1"
                                                         data-parent="#accordiontwo">
                                                        <div class="card-body">
                                                            <p>Fast on-site analysis using our proprietary mobile
                                                                app.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-30">
                                                    <a class="collapsed card-header" id="heading2" href="#"
                                                       data-toggle="collapse" data-target="#collapse2"
                                                       aria-expanded="false"
                                                       aria-controls="collapse2">
                                                        Monitor<span
                                                            class="toggle_btn"></span>
                                                    </a>
                                                    <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                                         data-parent="#accordiontwo">
                                                        <div class="card-body">
                                                            <p>
                                                                Accurate energy usage (and wastage) tracking with
                                                                Eniscope.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-30">
                                                    <a class="collapsed card-header" id="heading3" href="#"
                                                       data-toggle="collapse" data-target="#collapse3"
                                                       aria-expanded="false"
                                                       aria-controls="collapse3">
                                                        Analyse<span
                                                            class="toggle_btn"></span></a>
                                                    <div id="collapse3" class="collapse" aria-labelledby="heading3"
                                                         data-parent="#accordiontwo">
                                                        <div class="card-body">
                                                            <p>
                                                                Real-time trend analysis in the cloud, via our software
                                                                platform.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-30">
                                                    <a class="collapsed card-header" id="heading4" href="#"
                                                       data-toggle="collapse" data-target="#collapse4"
                                                       aria-expanded="false"
                                                       aria-controls="collapse4">
                                                        Reduce<span class="toggle_btn"></span></a>
                                                    <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                                         data-parent="#accordiontwo">
                                                        <div class="card-body">
                                                            <p>Saving opportunity analysis alongside retrofit
                                                                technologies.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-30">
                                                    <a class="collapsed card-header" id="heading4" href="#"
                                                       data-toggle="collapse" data-target="#collapse5"
                                                       aria-expanded="false"
                                                       aria-controls="collapse4">
                                                        Review<span class="toggle_btn"></span></a>
                                                    <div id="collapse5" class="collapse" aria-labelledby="heading4"
                                                         data-parent="#accordiontwo">
                                                        <div class="card-body">
                                                            <p>Comprehensive reporting and granular analysis to inform
                                                                decision making.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-30">
                                                    <a class="collapsed card-header" id="heading4" href="#"
                                                       data-toggle="collapse" data-target="#collapse6"
                                                       aria-expanded="false"
                                                       aria-controls="collapse4">
                                                        Review<span class="toggle_btn"></span></a>
                                                    <div id="collapse6" class="collapse" aria-labelledby="heading4"
                                                         data-parent="#accordiontwo">
                                                        <div class="card-body">
                                                            <p>Verifying success and target setting. The keys to
                                                                sustained performance.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-5">
                                    <div class="about-img">
                                        <img src="{{asset('smart.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                             aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="about-content-box">
                                        <div class="section-title section-white-title mb-30">
                                            <span class="span">Energy Monitoring & Saving With 7-Eleven</span>
                                        </div>
                                        <p>Lummii.Energy’s flagship product – the Eniscope energy management system – is
                                            at the centre of a nationwide project of energy monitoring and reduction for
                                            global convenience store giants 7-Eleven.
                                        </p>
                                        <p>
                                            Lummii.Energy partner IQ Energy
                                            has developed a remarkable relationship with a company well placed to
                                            benefit from the variety of impacts our products have had:
                                        </p>
                                        <ul style="color:white;text-decoration: underline">
                                            <li>2,700,000 kWh Saved</li>
                                            <li>864 Tonnes CO2 Saved</li>
                                            <li>11.52% Average Savings Via Low-Cost / No-Cost Solutions</li>
                                            <li>CSR Reporting System</li>
                                            <li>Substantial PR Benefits</li>
                                        </ul>
                                        <p>The project has been so successful that Eniscope has been recommended
                                            internally to the other countries in the region. Proof of Concepts (PoC) are
                                            underway in Norway and Sweden at the time of writing.</p>
                                        <p>The project has been so successful that Eniscope has been recommended
                                            internally to the other countries in the region. Proof of Concepts (PoC) are
                                            underway in Norway and Sweden at the time of writing.</p>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="about-img">
                                        <iframe width="692" height="390" src="https://www.youtube.com/embed/352UccBHAuE"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section><!--====== End About Section ======-->


    <section class="features-area-v1 pt-130 pb-130">
        <div class="container">
            <div align="center">
                <h5> Our technology will transform your energy performance
                    <p>Talk with our team to book in a free demo and find out how…</p></h5>
                <a class="main-btn">Book a demo</a>
            </div>
            <hr/>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="features-item text-center">
                        <div class="features-content">
                            <h5 style="text-align: left">Get to know Eniscope</h5>
                            <p style="text-align: justify">
                                The cutting-edge device that allows it all to happen, Eniscope is a ‘best-in-class’
                                energy management system. Actually, it’s more than that, it is a gateway to data
                                visibility and a huge step towards building energy optimisation.
                            </p>
                            <p style="text-align: justify">
                                Using Big Data drawn from device and circuit level inputs, existing meters and IoT
                                sensors, Eniscope provides a granular breakdown of exactly how, when and where you are
                                using (and wasting) energy.
                            </p>
                            <p style="text-align: justify">
                                That applies to a single building, or a full portfolio; with all that information ported
                                to an intuitive software platform. And with standalone sensors available including
                                temperature, occupancy, gas, water and much more – your data is always placed in
                                context.
                            </p>
                            <p style="text-align: justify">
                                Eniscope is easy and quick to install, versatile, pinpoint accurate and – for many FMs
                                and property managers around the world – indispensable.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <ul class="list-group list-group-flush">
                        <li style="font-size: large; padding-bottom: 7%;" class="list-group-item me">
                            <i style="margin-right: 5%" class="fa fa-clock-o"></i> Second by
                            second energy consumption data
                        </li>
                        <li style="font-size: large; padding-bottom: 7%;" class="list-group-item me">
                            <i style="margin-right: 5%" class="fa fa-money"></i> Clearly verify capital project energy
                            savings
                        </li>
                        <li style="font-size: large; padding-bottom: 7%;" class="list-group-item me">
                            <i style="margin-right: 5%" class="fa fa-eye"></i> Identify energy leaks and energy saving
                            opportunities
                        </li>
                        <li style="font-size: large; padding-bottom: 7%;" class="list-group-item me">
                            <i style="margin-right: 5%" class="fa fa-snowflake-o"></i> Easily integrate with your CAFM
                            or
                            BMS via our API
                        </li>
                        <li style="font-size: large; padding-bottom: 7%;" class="list-group-item me">
                            <i style="margin-right: 5%" class="fa fa-database"></i> Cutting-edge, easy-to-install
                            on-site
                            hardware
                        </li>
                        <li style="font-size: large; padding-bottom: 7%;" class="list-group-item me">
                            <i style="margin-right: 5%" class="fa fa-tachometer"></i> Infinately scalable solution. One
                            dashboard, multiple sites.
                        </li>
                        <li style="font-size: large; padding-bottom: 7%;" class="list-group-item me">
                            <i style="margin-right: 5%" class="fa fa-search-plus"></i> Expose energy-abusing resources
                            and
                            equipment.
                        </li>

                    </ul>


                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">

                    <img style="padding-top: 70%;" src="{{asset('eniscope_1.png')}}">

                </div>
            </div>
        </div>
    </section>
    <!--====== End FEatures section ======-->

    <!--====== Start Blog section ======-->
    {{-- <section class="blog-grid-v1 pt-120 pb-90">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-8">
                     <div class="section-title text-center mb-75">
                         <h2>Case Studies.</h2>
                         <h6>See how we helped these guys save time and money.</h6>
                     </div>
                 </div>
             </div>
             <div class="row blog-slider-one">
                 <div class="col-lg-4">
                     <div class="blog-post-item mb-30">
                         <div class="post-thumbnail">
                             <img src="assets/images/blog/blog-grid-1.jpg" alt="blog-grid">
                             <a href="#" class="date">20 January, 2021</a>
                         </div>
                         <div class="entry-content">
                             <h3 class="title"><a href="blog-details.html">Title comes here</a></h3>
                             <p>Lorem ipsum, or lipsum as it is sometimes
                                 known dummy text used in laying in the
                                 15th century who is thought.</p>
                             <a href="blog-details.html" class="main-btn">Read more</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="blog-post-item mb-30">
                         <div class="post-thumbnail">
                             <img src="assets/images/blog/blog-grid-1.jpg" alt="blog-grid">
                             <a href="#" class="date">20 January, 2021</a>
                         </div>
                         <div class="entry-content">
                             <h3 class="title"><a href="blog-details.html">Title comes here</a></h3>
                             <p>Lorem ipsum, or lipsum as it is sometimes
                                 known dummy text used in laying in the
                                 15th century who is thought.</p>
                             <a href="blog-details.html" class="main-btn">Read more</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="blog-post-item mb-30">
                         <div class="post-thumbnail">
                             <img src="assets/images/blog/blog-grid-1.jpg" alt="blog-grid">
                             <a href="#" class="date">20 January, 2021</a>
                         </div>
                         <div class="entry-content">
                             <h3 class="title"><a href="blog-details.html">Title comes here</a></h3>
                             <p>Lorem ipsum, or lipsum as it is sometimes
                                 known dummy text used in laying in the
                                 15th century who is thought.</p>
                             <a href="blog-details.html" class="main-btn">Read more</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="blog-post-item mb-30">
                         <div class="post-thumbnail">
                             <img src="assets/images/blog/blog-grid-1.jpg" alt="blog-grid">
                             <a href="#" class="date">20 January, 2021</a>
                         </div>
                         <div class="entry-content">
                             <h3 class="title"><a href="blog-details.html">Title comes here</a></h3>
                             <p>Lorem ipsum, or lipsum as it is sometimes
                                 known dummy text used in laying in the
                                 15th century who is thought.</p>
                             <a href="blog-details.html" class="main-btn">Read more</a>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </section>--}}


    <section class="cta-area-v1 pt-120 pb-110">
        <div class="container">
            <div class="cta-wrapper main-bg">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="section-title section-white-title">
                            <h2>The best and complete energy management solution
                                <span>Contact Us.</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="button-box">
                            <a href="{{url('/contact')}}" class="main-btn">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End CTA section ======-->


@stop
