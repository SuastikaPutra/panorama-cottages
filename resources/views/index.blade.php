@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')

<!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url('{{ asset('assets/img/foto-1.jpg') }}');"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Panorama Cottages 1</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Nestled in lush nature, this villa offers a peaceful escape and natural warmth — the perfect place to unwind and reconnect with serenity.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url('{{ asset('assets/img/foto-2.jpg') }}');"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">A place to remember</h2>
                                <p data-animation="fadeInUp" data-delay="700ms"> A cozy villa perfect for creating cherished memories. Surrounded by tranquility, it offers beautiful spaces and stunning views, ideal for family gatherings and romantic getaways.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url('{{ asset('assets/img/foto-7.jpg') }}');"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Enjoy your life</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">A reminder to embrace the present, find joy in everyday moments, and pursue passions for a fulfilling and vibrant existence.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    {{-- <!-- ##### Book Now Area Start ##### -->
    <div class="book-now-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="book-now-form">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Book Now Area End ##### --> --}}

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6">
                    <div class="about-text text-center mb-100">
                        <div class="section-heading text-center">
                            <div class="line-"></div>
                            <h2>All You Need for a Relaxing Stay</h2>
                        </div>
                        <p>A cozy and thoughtfully designed villa set in a tranquil environment. With a mini kitchen, private bathroom, and inviting interiors, it’s ideal for families, couples, or solo travelers looking for a peaceful and comfortable retreat. This villa offers a warm space to relax, unwind, and enjoy simple, memorable moments.</p>
                        <div class="about-key-text">
                            <h6><span class="fa fa-check"></span> Includes a mini kitchen</h6>
                            <h6><span class="fa fa-check"></span> Bathroom includes towels, and toiletries.</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail homepage mb-100">
                        <!-- First Img -->
                        <div class="first-img wow fadeInUp" data-wow-delay="100ms">
                            <img src="{{ asset('assets/img/foto-4.jpg') }}" alt="">
                        </div>
                        <!-- Second Img -->
                        <div class="second-img wow fadeInUp" data-wow-delay="300ms">
                            <img src="{{ asset('assets/img/foto-5.jpg') }}" alt="">
                        </div>
                        {{-- <!-- Third Img-->
                        <div class="third-img wow fadeInUp" data-wow-delay="500ms">
                            <img src="{{ asset('assets/img/foto-2.jpg') }}" alt="">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Pool Area Start ##### -->
    <section class="pool-area section-padding-100 bg-img bg-fixed" style="background-image: url('{{ asset('assets/img/foto-3.jpg') }}');">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-7">
                    <div class="pool-content text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="section-heading text-center white">
                            <div class="line-"></div>
                            <h2>Pool</h2>
                            <p>The pool at Panorama Cottages is a serene oasis, surrounded by lush greenery and stunning views. With crystal-clear water, it invites guests to relax and unwind. Perfect for a refreshing swim or lounging by the water, the pool area offers a tranquil escape, making it an ideal spot for both relaxation and social gatherings.</p>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-cocktail"></i>
                                    <p>Butler</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-swimming-pool"></i>
                                    <p>Pool</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-beach"></i>
                                    <p>Sunbeds</p>
                                </div>
                            </div>
                        </div>
                        <!-- Button -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Pool Area End ##### -->

    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2 id="rooms">Choose a room</h2>
                        <p>Superior Room offers a versatile and spacious stay designed to meet the needs of families, groups, or long-term travelers. Available in 1, 2, or 3-bedroom configurations, each unit combines modern comfort with elegant interiors. Enjoy private bedrooms, a cozy living area, and essential amenities such as air conditioning, free Wi-Fi, and a well-equipped kitchenette.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-around">

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url('{{ asset('assets/img/foto-11.jpg') }}');"></div>
                        <!-- Price -->
                        <p class="price-from">IDR 750,000/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Superior - 1 Bedroom</h4>
<p>Offers a cozy space with a king-sized bed, modern amenities, and a relaxing ambiance, perfect for solo travelers or couples.</p>
                        </div>
                        <!-- Book Room -->
                        <a href="{{ route('room-1') }}" class="book-room-btn btn palatin-btn">Book Room</a>
                    </div>
                </div>

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url('{{ asset('assets/img/foto-1.jpg') }}');"></div>
                        <!-- Price -->
                        <p class="price-from">IDR 2,000,000/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Superior - 2 Bedrooms</h4>
                            <p>Ideal for small families or friends, featuring two bedrooms, a shared living area, and all the comforts you need for a pleasant stay.</p>

                        </div>
                        <!-- Book Room -->
                        <a href="{{ route('room-2') }}" class="book-room-btn btn palatin-btn">Book Room</a>
                    </div>
                </div>

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url('{{ asset('assets/img/foto-11.jpg') }}');"></div>
                        <!-- Price -->
                        <p class="price-from">From $150/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Superior - 3 Bedrooms</h4>
                            <p>Offers spacious accommodations with three private bedrooms, a living area, and modern amenities, perfect for families or groups.</p>
                        </div>
                        <!-- Book Room -->
                        <a href="{{ route('room-2') }}" class="book-room-btn btn palatin-btn">Book Room</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Rooms Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area d-flex flex-wrap align-items-center">
        <div class="home-map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe>
        </div>
        <!-- Contact Info -->
        <div class="contact-info">
            <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                <div class="line-"></div>
                <h2>Contact Info</h2>
                <p>Have questions or ready to book your stay? We’d love to hear from you! Feel free to reach out via phone, email, or WhatsApp.</p>
            </div>
            <h4 class="wow fadeInUp" data-wow-delay="300ms">Jl. Sriwijaya No.32, Legian, Kec. Kuta, Kabupaten Badung, Bali 80361</h4>
            <h5 class="wow fadeInUp" data-wow-delay="400ms"><a href="https://wa.me/6281237208224" style="font-size: larger">+62 812-3720-8224 (Ibu Oka)</a></h5>
            <h5 class="wow fadeInUp" data-wow-delay="500ms"><a href="mailto:panoramacottages1@yahoo.com" style="font-size: large">panoramacottages1@yahoo.com</a></h5>
            <!-- Social Info -->
            {{-- <div class="social-info mt-50 wow fadeInUp" data-wow-delay="600ms">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div> --}}
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
@endsection
   
 