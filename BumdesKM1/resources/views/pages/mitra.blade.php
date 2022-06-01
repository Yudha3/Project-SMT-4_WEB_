@extends('layouts.app')

@section('title', 'Mitra Bumdes')
    
@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                Mitra
                            </li>
                            <li class="breadcrumb-item">
                                
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <section class="section section-testimonial-content1" id="testimonialContent">
                <div class="container">
                    <div class="section-popular-furniture row justify-content-left">
                        @foreach ($items as $item)
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="card card-testimonial1 text-center">
                                    <div class="testimonial-content1">
                                        <img src="{{ url('storage') }}/{{ $item->image }}" alt="user" class="mb-4" width="100" height="100">
                                        <h3 class="mb-4">
                                            {{ $item->nama_mtr }}
                                        </h3>
                                        <p class="testimonial1">
                                            {{ $item->alamat }}
                                        </p>
                                        <p class="testimonial1">
                                            {{ $item->no_telp }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                        
                    </div>
                </div>
            </section>
        </div>
    </section>
</main>
@endsection

