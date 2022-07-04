@extends('layouts.checkout')
@section('title', 'Checkout')
    
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
                            <li class="breadcrumb-item">
                                Details
                            </li>
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>
                            Checkout Your Product
                        </h1>
                        <div class="alamat mt-3">
                            <h2>Alamat</h2>
                            <form action="" class="form-inline">
                                <label for="alamat" class="sr-only">Alamat</label>
                                <textarea name="alamat" rows="10" class="d-block w-100 form-control">{{ old('alamat') }}</textarea>
                            </form>
                        </div>
                        <div class="phone mt-3">
                            <h2>Alamat</h2>
                            <form action="" class="form-inline">
                                <label for="phone" class="sr-only">Nomor Telepon</label>
                                <input type="number" class="form-control" name="phone" placeholder="Nomor Telepon" value="{{ old('phone') }}">
                            </form>
                        </div>
                        <div class="qty mt-3">
                            <h2>Alamat</h2>
                            <form action="" class="form-inline">
                                <label for="qty" class="sr-only">Quantity</label>
                                <input type="number" class="form-control" name="qty" placeholder="Quantity" value="{{ old('qty') }}">
                            </form>
                        </div>
                        {{--  <div class="member mt-3">
                            <form class="form-inline">
                                <label class="sr-only" for="pengiriman">Pengiriman</label>
                                <select class="custom-select mb-2 mr-sm-2" id="inlineFormCustomSelectPref">
                                    <option selected value="">Pengiriman</option>
                                    <option value="2">JNE</option>
                                    <option value="3">J&T</option>
                                </select>
            
                                <label class="sr-only" class="mr-2" for="inlineFormCustomSelectPref">Pembayaran</label>
                                <select class="custom-select mb-2 mr-sm-2" id="inlineFormCustomSelectPref">
                                  <option selected value="">BANK</option>
                                  <option value="2">30 Days</option>
                                  <option value="3">N/A</option>
                                </select>
            
                                <button type="submit" class="btn btn-add-now mb-2 px-4">
                                  Add Now
                                </button>
                            </form>
                        </div>  --}}
                        {{--  <div class="note mt-3">
                            <h2>Catatan</h2>
                            <form action="" class="form-inline">
                                <label for="catatan" class="sr-only">Catatan</label>
                                <textarea name="catatan" rows="3" class="d-block w-100 form-control">{{ old('catatan') }}</textarea>
                            </form>
                        </div>  --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>
                            Checkout Finaly
                        </h2>
                        <table class="product-finaly border-top">
                            <tr>
                                <th width="50%">Variasi</th>
                                <td width="50%" class="text-right">
                                    Custom
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Jumlah</th>
                                <td width="50%" class="text-right">
                                    2
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">
                                    Rp 100.000
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right">
                                    Rp 200.000
                                </td>
                            </tr>
                        </table>
                        <hr/>
                        <h2>
                            Payment Instructions
                        </h2>
                        <p class="payment-instructions">
                            Please complete your payment
                        </p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="frontend/images/ic_event.png" alt="" class="bank-image">
                                <div class="description">
                                    <h3>
                                        Bumdes Karya Mandiri
                                    </h3>
                                    <p>
                                        0881 8829 8800
                                        <br/>
                                        Bank Central Asia
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="{{ route('checkout-success') }}" class="btn btn-block btn-buy-now mt-3 py-2">
                            Buy Now
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('detail') }}" class="text-muted">
                            Cancel Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection