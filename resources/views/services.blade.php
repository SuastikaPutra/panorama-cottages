@extends('layouts.app')

@section('title')
    Services
@endsection

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center"
        style="background-image: url('{{ asset('assets/img/foto-3.jpg') }}');">
        <div class="bradcumbContent">
            <h2>Services</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Service Intro Area Start ##### -->
    <section class="services-intro">
        <div class="container">
            <div class="row align-items-center">
                <!-- Service Intro Text -->
                <div class="col-12 col-lg-6 mb-lg-5 mb-0">
                    <div class="service-intro-text mb-100">
                        <div class="section-heading">
                            <div class="line-"></div>
                            <h2>Amazing Services</h2>
                        </div>
                        <p>We offer a range of services to enhance your stay, including airport transfer for easy travel, a
                            personal butler to cater to your needs, daily breakfast, relaxing spa treatments, and daily
                            cleaning service to keep your space fresh and comfortable.</p>
                    </div>
                </div>

                <!-- Services Features -->
                <div class="col-12 col-lg-6">
                    <div class="row mb-100">

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-4">
                            <div class="single-cool-fact">
                                <div class="scf-text">
                                    <i class="icon-cocktail"></i>
                                    <p>Butler</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-4">
                            <div class="single-cool-fact">
                                <div class="scf-text">
                                    <i class="icon-swimming-pool"></i>
                                    <p>Pool</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-4">
                            <div class="single-cool-fact">
                                <div class="scf-text">
                                    <i class="icon-beach"></i>
                                    <p>Sunbeds</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Service Intro Area End ##### -->

    <!-- ##### Core Features Start ##### -->
    <section class="core-features-area">
        <div class="container">
            <div class="row justify-content-center">

                <!-- Single Core Feature Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-core-feature mb-100">
                        <div class="bg-thumbnail bg-img"></div>
                        <!-- Content -->
                        <div class="feature-content">
                            <i class="icon-beach"></i>
                            <h3>Spa</h3>
                            <p>Relax and unwind with our exclusive spa treatments, designed to rejuvenate your body and mind
                                in a tranquil setting, right within our property.</p>

                        </div>
                    </div>
                </div>

                <!-- Single Core Feature Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-core-feature mb-100">
                        <div class="bg-thumbnail bg-img"></div>
                        <!-- Content -->
                        <div class="feature-content">
                            <i class="icon-cocktail-1"></i>
                            <h3>Breakfast</h3>
                            <p>Start your day with a freshly prepared breakfast, featuring a variety of local and
                                international dishes served at your convenience every morning.</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Core Features End ##### -->

    <!-- ##### Services Area Start ##### -->
    <section class="services-area">
        <div class="container">
            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <i class="icon-trekking"></i>
                        <h4>Motorbike Rentals</h4>
                        <p>Explore the area at your own pace with our motorbike rental service. It's a convenient and
                            affordable way to discover nearby attractions, beaches, and local spots with ease.</p>

                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="200ms">
                        <i class="icon-take-off"></i>
                        <h4>Airport Transfer</h4>
                        <p>Enjoy stress-free travel with our airport transfer service. Our drivers will ensure you reach
                            your destination comfortably and on time, whether arriving or departing.</p>

                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <i class="icon-flip-flops"></i>
                        <h4>Cleaning Service</h4>
                        <p>Our daily cleaning service keeps your accommodation fresh and spotless, allowing you to relax and
                            enjoy a consistently comfortable environment.</p>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Services Area End ##### -->
@endsection
