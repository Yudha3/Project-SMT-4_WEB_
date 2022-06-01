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
                        @foreach ($items as $item)
                        <h1>
                            BUMDES KARYA MANDIRI
                        </h1>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{ url('storage') }}/{{ $item->image }}" class="xzoom" id="xzoom-default" xoriginal="{{ url('storage') }}/{{ $item->image }}" width="660" height="350">
                            </div>
                        </div>
                        <h2>
                            Deskripsi
                        </h2>
                        <p>
                            {{ $item->description }}
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                
                                    <img src="{{ url('frontend/images/ic_event.png') }}" alt="" class="features-image">
                                
                                <div class="description">
                                    <h3>
                                        Pengelola
                                    </h3>
                                    <p>
                                        {{ $item->pengelola }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                
                                    <img src="{{ url('frontend/images/ic_event.png') }}" alt="" class="features-image">
                               
                                <div class="description">
                                    <h3>
                                        Contact
                                    </h3>
                                    <p>
                                        {{ $item->contact }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                               
                                    <img src="{{ url('frontend/images/ic_event.png') }}" alt="" class="features-image">
                                
                                <div class="description">
                                    <h3>
                                        Alamat
                                    </h3>
                                    <p>
                                        {{ $item->address }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush