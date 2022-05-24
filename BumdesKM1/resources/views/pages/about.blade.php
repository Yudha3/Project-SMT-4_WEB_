@extends('layouts.app')

@section('title', 'About Bumdes')
    
@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                About
                            </li>
                            <li class="breadcrumb-item active">
                                Bumdes Karya Mandiri
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-15 pl-lg-0">
                    <div class="card card-details">
                        <h1>
                            BUMDES KARYA MANDIRI
                        </h1>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="frontend/images/unsplash1.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/images/unsplash1.jpg" width="660" height="350">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="frontend/images/unsplash2.jpg">
                                    <img src="frontend/images/unsplash2.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/unsplash2.jpg">
                                </a>
                                <a href="frontend/images/unsplash2.jpg">
                                    <img src="frontend/images/unsplash2.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/unsplash2.jpg">
                                </a>
                                <a href="frontend/images/unsplash2.jpg">
                                    <img src="frontend/images/unsplash2.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/unsplash2.jpg">
                                </a>
                                <a href="frontend/images/unsplash2.jpg">
                                    <img src="frontend/images/unsplash2.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/unsplash2.jpg">
                                </a>
                                <a href="frontend/images/unsplash2.jpg">
                                    <img src="frontend/images/unsplash2.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/unsplash2.jpg">
                                </a>
                            </div>
                        </div>
                        <h2>
                            Deskripsi Product
                        </h2>
                        <p>
                            Kursi Rotan Sintetis adalah sejenis kursi 
                            tamu yang didesain khusus untuk memberikan 
                            kenyamanan berlebih kepada pemakainya, bentuk 
                            kursi yang melingkar dengan lapisan busa empuk 
                            diatasnya sudah diperhitungkan dengan teliti. 
                            hal ini bertujuan mendapatkan kepuasan dalam 
                            penggunaan produk kami. Sebagai tempat untuk 
                            bersanta Kursi Rotan dibuat senyaman mungkin hingga 
                            memberikan kesan kepada orang yang menempatinya.
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                
                                    <img src="frontend/images/ic_event.png" alt="" class="features-image">
                                
                                <div class="description">
                                    <h3>
                                        Bahan
                                    </h3>
                                    <p>
                                        Rotan Sintetis
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                
                                    <img src="frontend/images/ic_event.png" alt="" class="features-image">
                               
                                <div class="description">
                                    <h3>
                                        Warna
                                    </h3>
                                    <p>
                                        Custom
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                               
                                    <img src="frontend/images/ic_event.png" alt="" class="features-image">
                                
                                <div class="description">
                                    <h3>
                                        Include
                                    </h3>
                                    <p>
                                        Kursi 2
                                        <br/>
                                        Bantalan busa
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                
                                    <img src="frontend/images/ic_event.png" alt="" class="features-image">
                                
                                <div class="description">
                                    <h3>
                                        Harga
                                    </h3>
                                    <p>
                                        Rp 100.000
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/library/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/library/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.xzoom, xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush