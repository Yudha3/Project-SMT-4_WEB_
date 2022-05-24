@extends('layouts.app')

@section('title', 'Katalog Product')
    
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
                                Product
                            </li>
                            <li class="breadcrumb-item">
                                
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col p-0">
                    <nav>
                        <!-- Topbar Search -->
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                    </nav>
                </div>
            </div>
            
            <section class="section-popular-content1" id="popularContent">
                <div class="container">
                    <div class="section-popular-furniture1 row justify-content-center">
                       <div class="col-sm-6 col-md-4 col-lg-3">
                           <div class="card-furniture1 text-center d-flex flex-column"
                           style="background-image: url('frontend/images/kursi.jpg');">
                               <div class="furniture-nama1">
                                   KURSI
                               </div>
                               <div class="furniture-button mt-auto">
                                   <a href="{{ route('detail') }}" class="btn btn-furniture-details px-4">
                                       View Details
                                   </a>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-furniture1 text-center d-flex flex-column"
                        style="background-image: url('frontend/images/kursi.jpg');">
                            <div class="furniture-nama1">
                                KURSI
                            </div>
                            <div class="furniture-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-furniture-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-furniture1 text-center d-flex flex-column"
                        style="background-image: url('frontend/images/kursi.jpg');">
                            <div class="furniture-nama1">
                                KURSI
                            </div>
                            <div class="furniture-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-furniture-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-furniture1 text-center d-flex flex-column"
                        style="background-image: url('frontend/images/kursi.jpg');">
                            <div class="furniture-nama1">
                                KURSI
                            </div>
                            <div class="furniture-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-furniture-details px-4">
                                    View Details
                                </a>
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

