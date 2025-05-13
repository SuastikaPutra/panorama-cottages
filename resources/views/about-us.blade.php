@extends('layouts.app')

@section('title')
About Us
@endsection

@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('assets/img/foto-1.jpg') }}');">
    <div class="bradcumbContent">
        <h2>About us</h2>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### About Us Area Start ##### -->
<section class="about-us-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="about-text mb-100">
                    <div class="section-heading">
                        <div class="line-"></div>
                        <h2>Panorama Cottages 1</h2>
                    </div>
                    <p>Panorama Cottages 1 is one of the accommodation businesses that was established in 1980, located at Jalan Sriwijaya No.32, Legian, Kec. Kuta, Badung Regency. This cottage has around 40 cottages equipped with facilities such as Mini kitchen, Bathtub, Television, Balcony, Wi-Fi, and several other facilities.</p>
                    <p>These cottages also offer a home-like experience, where you can do several activities such as enjoying the view on the balcony, cooking food in the kitchen, and if you want to go to the beach, you can walk or rent a vehicle for a distance of about 3 kilometers.</p>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="about-thumbnail mb-100">
                    <img src="{{ asset('assets/img/foto-2.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->

<!-- ##### Milestones Area Start ##### -->
<section class="our-milestones section-padding-100-0 bg-img bg-overlay bg-fixed" style="background-image: url('{{ asset('assets/img/foto-13.jpg') }}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="section-heading text-center white">
                    <div class="line-"></div>
                    <h2>Our Milestones</h2>
                    <p>Panorama Cottages 1 has been serving guests since 1980 with the comfort and beauty of Bali. We continue to grow for your comfort.</p>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <!-- Single Cool Facts -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <div class="scf-text">
                        <i class="icon-resort"></i>
                        <h2><span class="counter">40</span></h2>
                        <p>Cottages</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <div class="scf-text">
                        <i class="icon-swimming-pool"></i>
                        <h2><span class="counter">1</span></h2>
                        <p>Pool</p>
                    </div>
                </div>
            </div>
            <!-- Tambahkan milestone lain jika ada -->
        </div>
    </div>
</section>
<!-- ##### Milestones Area End ##### -->

<!-- ##### Hotels Area Start ##### -->
<section class="our-hotels-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <div class="line-"></div>
                    <h2>Our Facilities</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Single Hotel Info -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-hotel-info mb-100">
                    <div class="hotel-info-text">
                        <h6><span class="fa fa-check"></span> Mini Kitchen & Bathtub</h6>
                        <h6><span class="fa fa-check"></span> TV & Free Wi-Fi</h6>
                        <h6><span class="fa fa-check"></span> Balcony for relaxing</h6>
                    </div>
                    
                </div>
            </div>

            <!-- Single Hotel Info -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-hotel-info mb-100">
                    <div class="hotel-info-text">
                        <h6><span class="fa fa-check"></span> Calm & beautiful atmosphere</h6>
                        <h6><span class="fa fa-check"></span> Strategic location in Legian</h6>
                        <h6><span class="fa fa-check"></span> Walk to Beach (3 KM)</h6>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hotels Area End ##### -->

<!-- ##### Testimonial Area Start ##### -->
<section class="testimonial-area section-padding-100 bg-img" style="background-image: url('{{ asset('assets/img/pattern.png') }}');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-content">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>What Clients Say</h2>
                    </div>

                    <!-- Testimonial Slides -->
                    <div class="testimonial-slides owl-carousel">

                        <!-- Testimonial 1 -->
                        <div class="single-testimonial">
                            <p>"Nyaman dan tenang.
                                Lokasi tidak terlalu jauh berjalan kaki menuju pantai legian dan seminyak membuat akomodasi ini lebih sempurna. Menginap lah di sini saat liburan di Bali"</p>
                            <h6>Susana Hutabarat, <span>Google Review</span></h6>
                            <img src="{{ asset('assets/img/review-icon.png') }}" alt="">
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="single-testimonial">
                            <p>"Great garden escape with beautiful pool, amazing outdoor bathroom and friendly staff. Rooms were really large and secluded with your own balcony. Basic breakfast included too. Rooms not modern, but didn't need to be - character with relaxed atmosphere way more important."</p>
                            <h6>ruthoo2011, <span>Tripadvisor Review</span></h6>
                            <img src="{{ asset('assets/img/review-icon.png') }}" alt="">
                        </div>

                        <!-- Testimonial dari Google Review -->
                        <div class="single-testimonial">
                            <p>"The place was good and it was comfortable. I love staying there, it was in the centre of the market, all places nearby with good food main street."</p>
                            <h6>Priyansh Kedia, <span>Google Review</span></h6>
                            <img src="{{ asset('assets/img/review-icon.png') }}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Testimonial Area End ##### -->

@endsection
