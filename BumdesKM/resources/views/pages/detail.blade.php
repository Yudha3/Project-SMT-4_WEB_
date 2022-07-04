@extends('layouts.app')

@section('title', 'Detail Product')
    
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
                                Product
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>
                            {{ $item->title }}
                        </h1>
                        @if ($item->galleries->count())

                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{ Storage::url($item->galleries->first()->image) }}" class="xzoom" id="xzoom-default" xoriginal="{{ Storage::url($item->galleries->first()->image) }}">
                            </div>
                            <div class="xzoom-thumbs">
                                @foreach ($item->galleries as $gallery)
                                    <a href="{{ Storage::url($gallery->image) }}">
                                        <img src="{{ Storage::url($gallery->image) }}" class="xzoom-gallery" width="128" xpreview="{{ Storage::url($gallery->image) }}">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                            
                        @endif
                        <h2>
                            Deskripsi Product
                        </h2>
                        <p>
                            {!! $item->description !!}
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                
                                    <img src="{{ url('frontend/images/ic_event.png') }}" alt="" class="features-image">
                                
                                <div class="description">
                                    <h3>
                                        Bahan
                                    </h3>
                                    <p>
                                        {{ $item->materials }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                
                                    <img src="{{ url('frontend/images/ic_event.png') }}" alt="" class="features-image">
                               
                                <div class="description">
                                    <h3>
                                        Berat
                                    </h3>
                                    <p>
                                        {{ $item->weight }} Kg
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                
                                    <img src="{{ url('frontend/images/ic_event.png') }}" alt="" class="features-image">
                                
                                <div class="description">
                                    <h3>
                                        Harga
                                    </h3>
                                    <p>
                                        Rp {{ $item->price }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>
                            Additional Description
                        </h2>
                        <table class="product-finaly border-top">
                            <tr>
                                <th width="50%">Stok</th>
                                <td width="50%" class="text-right">
                                    {{ $item->stock }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="{{ route('product') }}" class="btn btn-block btn-buy-now mt-3 py-2">
                            Back
                        </a>
                        {{--  @auth
                            <form action="" method="POST">
                                <button class="btn btn-block btn-buy-now mt-3 py-2" type="submit">
                                    Checkout Now
                                </button>
                            </form>
                        @endauth
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-block btn-buy-now mt-3 py-2">
                                Login or Register to Checkout
                            </a>
                        @endguest  --}}
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