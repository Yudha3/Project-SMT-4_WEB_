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
                    <div class="section-popular-furniture row justify-content-center">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonial1 text-center">
                                <div class="testimonial-content1">
                                    <img src="{{ url('frontend/images/kursi.jpg') }}" alt="user" class="mb-4" width="200" height="150">
                                    <h3 class="mb-4">
                                        Shabrina
                                    </h3>
                                    <p class="testimonial1">
                                        Alamat
                                    </p>
                                    <p class="testimonial1">
                                        Nomer Telepon
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonial1 text-center">
                                <div class="testimonial-content1">
                                    <img src="frontend/images/avatar-2.png" alt="user" class="mb-4 rounded-circle">
                                    <h3 class="mb-4">
                                        Shabrina
                                    </h3>
                                    <p class="testimonial1">
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
                            <div class="card card-testimonial1 text-center">
                                <div class="testimonial-content1">
                                    <img src="frontend/images/avatar-2.png" alt="user" class="mb-4 rounded-circle">
                                    <h3 class="mb-4">
                                        Shabrina
                                    </h3>
                                    <p class="testimonial1">
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
                </div>
            </section>
        </div>
    </section>
</main>
@endsection

