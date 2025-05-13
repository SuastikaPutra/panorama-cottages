@extends('layouts.app')

@section('title')
Contact
@endsection

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('assets/img/foto-7.jpg') }}');">
        <div class="bradcumbContent">
            <h2>Contact</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area d-flex section-padding-100-0 flex-wrap align-items-center">
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