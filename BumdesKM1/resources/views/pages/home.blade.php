@extends('layouts.app')

@section('title')
    BumdesKM
@endsection

@section('content')

<!-- Header -->
<header class="text-center">
    <h1>
        Kerajinan Tangan dari Barang Bekas
    </h1>
    <p>
        Hard to find a good mentor according to your wishes?
        <br/>
        Dont worry because we are here to help you
    </p>
    <a href="#popular" class="btn btn-get-started px-4 mt-4">
        Get Started
    </a>
</header>

<!-- Content -->
<main>
    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>
                        Kerajinan Populer yang Mungkin Anda Suka
                    </h2>
                    <p>
                        Kriya atau hastakarya atau kerajinan tangan adalah
                        <br/> 
                        kegiatan seni yang menitikberatkan pada keterampilan
                        <br/> 
                        tangan dan fungsi untuk mengolah bahan baku yang sering 
                        <br/>
                        ditemukan di lingkungan menjadi benda-benda yang tidak hanya 
                        <br/>
                        bernilai pakai, tetapi juga bernilai estetis.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-furniture row justify-content-center">
               @foreach ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-furniture text-center d-flex flex-column"
                            style="background-image: url('{{ $item->galleries->count() ? Storage::url
                            ($item->galleries->first()->image) : '' }}');">
                            <div class="furniture-nama">
                                {{ $item->title }}
                            </div>
                            <div class="furniture-button mt-auto">
                                <a href="{{ route('detail', $item->id) }}" class="btn btn-furniture-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
               @endforeach
            </div>
        </div>
    </section>
    <section class="section-experience">
        <div class="container">
            <div class="row">
                <div class="col-md-4 while">
                    <h2>
                        Feel The Experiences
                        <br/> 
                        While Working in 
                        <br/>
                        Our Space
                    </h2>
                </div>
            </div>
            <div class="section-stats row justify-content-left" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>
                        {{ $product }}
                    </h2>
                    <p>
                        Product
                    </p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>
                        {{ $transactionout_success }}
                    </h2>
                    <p>
                        Product Populer
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-gambar">
        <div class="container">
            <div class="col-sm-6 col-md-4 col-lg-7">
                <div class="card-furniture justify-content-center text-center d-flex flex-column"
                style="background-image: url('{{ $item->galleries->count() ? Storage::url
                    ($item->galleries->first()->image) : '' }}');">
                    
                </div>
            </div>
        </div>
    </section>
    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>
                        They Are Loving Us
                    </h2>
                    <p>
                        Moment were giving then
                        <br/>
                        the best experience
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-furniture row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/avatar-2.png" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">
                                Shabrina
                            </h3>
                            <p class="testimonial">
                                "Experienced Office Furniture has
                                
                                given us the ability to combine
                                
                                contemporary furnishing with 
                                 
                                state-of-the-art equipment in heritage 
                                
                                listed surrounds, a perfect blend."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/avatar-2.png" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">
                                Shabrina
                            </h3>
                            <p class="testimonial">
                                "Experienced Office Furniture has
                                
                                given us the ability to combine
                                
                                contemporary furnishing with 
                                
                                state-of-the-art equipment in heritage 
                                
                                listed surrounds, a perfect blend."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/avatar-2.png" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">
                                Shabrina
                            </h3>
                            <p class="testimonial">
                                "Experienced Office Furniture has
                                
                                given us the ability to combine
                                 
                                contemporary furnishing with 
                                
                                state-of-the-art equipment in heritage 
                                
                                listed surrounds, a perfect blend."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                        I Need Help
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection