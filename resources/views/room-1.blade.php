@extends('layouts.app')

@section('title')
Superior - 1 Bedroom
@endsection

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center"
        >
        <div class="bradcumbContent">
            <h2>Superior - 1 Bedroom</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <div class="container mb-5">
        <div class="row justify-content-center">
            <!-- Gambar Utama -->
            <div class="col-md-8 mb-3">
                <picture>
                    <img src="{{ asset('assets/img/foto-11.jpg') }}" alt="Room 1" class="img-fluid rounded"
                        style="max-height: 500px; width: 100%; object-fit: cover;" loading="lazy">
                </picture>
            </div>


            <!-- Gambar-Gambar Tambahan (Gallery) -->
            <div class="col-md-4">
                <!-- Desktop: Scroll Vertikal -->
                <div class="d-none d-md-block" style="max-height: 500px; overflow-y: auto;">
                    <div class="mb-3">
                        <picture>
                            <img src="{{ asset('assets/img/foto-7.jpg') }}" alt="Tour Image" class="img-fluid rounded"
                                style="height: 200px; width: 100%; object-fit: cover;margin-bottom: 10px;" loading="lazy">
                        </picture>
                        <picture>
                            <img src="{{ asset('assets/img/foto-8.jpg') }}" alt="Tour Image" class="img-fluid rounded"
                                style="height: 200px; width: 100%; object-fit: cover;margin-bottom: 10px;" loading="lazy">
                        </picture>
                        <picture>
                            <img src="{{ asset('assets/img/foto-9.jpg') }}" alt="Tour Image" class="img-fluid rounded"
                                style="height: 200px; width: 100%; object-fit: cover;margin-bottom: 10px;" loading="lazy">
                        </picture>
                        <picture>
                            <img src="{{ asset('assets/img/foto-10.jpg') }}" alt="Tour Image" class="img-fluid rounded"
                                style="height: 200px; width: 100%; object-fit: cover;margin-bottom: 10px;" loading="lazy">
                        </picture> <picture>
                            <img src="{{ asset('assets/img/foto-13.jpg') }}" alt="Tour Image" class="img-fluid rounded"
                                style="height: 200px; width: 100%; object-fit: cover;margin-bottom: 10px;" loading="lazy">
                        </picture>
                    </div>
                </div>

                <!-- Mobile: Scroll Horizontal -->
                <div class="d-md-none" style="overflow-x: auto; white-space: nowrap;">
                    <div style="display: inline-block; width: 200px; margin-right: 10px;">
                        <picture>
                            <img src="{{ asset('assets/img/foto-2.jpg') }}" alt="Tour Image" class="img-fluid rounded"
                                style="height: 200px; width: 100%; object-fit: cover;" loading="lazy">
                        </picture>
                        <picture>
                            <img src="{{ asset('assets/img/foto-4.jpg') }}" alt="Tour Image" class="img-fluid rounded"
                                style="height: 200px; width: 100%; object-fit: cover;" loading="lazy">
                        </picture>
                        <picture>
                            <img src="{{ asset('assets/img/foto-1.jpg') }}" alt="Tour Image" class="img-fluid rounded"
                                style="height: 200px; width: 100%; object-fit: cover;" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gambar Utama dan Gallery -->

    <div class="container mb-5">
        <!-- ##### Progress Bars & Accordions ##### -->
        <div class="col-12">
            <div class="elements-title">
                <h4>Room Descriptions</h4>
            </div>
        </div>

        <p>
            Our Deluxe Room offers a perfect blend of comfort and elegance, designed to make your stay truly enjoyable.
            Featuring a spacious layout with a cozy king-sized bed, modern amenities, air conditioning, a private bathroom,
            and a relaxing ambiance, this room is ideal for couples or solo travelers seeking both style and serenity. Step
            out onto your private terrace or balcony and enjoy views of the surrounding area — the perfect place to unwind
            after a day of exploration.
        </p>
        <div class="row align-items-center my-4">
            <div class="ml-3 mr-5">
                <h5 class="text-primary">Price: <strong>IDR 750,000 / night</strong></h5>
            </div>
            <div>
                <a href="https://wa.me/6281237208224" class="btn palatin-btn btn-3 m-2">Book Now <i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
        <!-- ##### Hotels Area Start ##### -->
        <div class="container mt-4">
            <div class="col-12 mb-4">
                <h4>Room Facilities</h4>
            </div>

            <div class="row">
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
    </div>
    <!-- ##### Hotels Area End ##### -->
@endsection
