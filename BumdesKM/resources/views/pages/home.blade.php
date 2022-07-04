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
                        kegiatan seni yang menitikberatkan pada keterampilan 
                        tangan dan fungsi untuk mengolah bahan baku yang sering 
                        ditemukan di lingkungan menjadi benda-benda yang tidak hanya 
                        bernilai pakai, tetapi juga bernilai estetis.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-popular-content" id="popularContent">
        <div class="container" >
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
            <div class="row justify-content-center">
                <div class="col-md-4 while text-center">
                    <h2>
                        Feel The Experiences 
                        While Working in 
                        Our Space
                    </h2>
                </div>
            </div>
            <div class="section-stats row justify-content-center" id="stats">
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
    {{--  <section class="section-gambar">
        <div class="container">
            <div class="col-sm-6 col-md-4 col-lg-7">
                <div class="card-furniture"
                style="background-image: url('{{ $item->galleries->count() ? Storage::url
                    ($item->galleries->first()->image) : '' }}');">
                </div>
            </div>
        </div>
    </section>  --}}
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
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    @foreach ($reviews as $review)
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="{{ url('frontend/images/avatar-2.png') }}" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">{{ $review->user->name }}</h2>
                            <p class="description">
                                {{ $review->comment }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
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
    </section>
</main>

@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/style/swiper-bundle.min.css') }}">
@endpush

@push('addon-script')
    <!-- Swiper JS -->
    <script src="{{ url('frontend/scripts/swiper-bundle.min.js') }}"></script>

    <!-- JavaScript -->
    <script src="{{ url('frontend/scripts/script.js') }}"></script>
@endpush