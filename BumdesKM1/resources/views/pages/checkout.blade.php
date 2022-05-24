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
                                <label for="inputAlamat" class="sr-only">Alamat</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" id="inputAlamat" placeholder="Alamat">
                            </form>
                        </div>
                        <div class="pengiriman mt-3">
                            <h2>Opsi Pengiriman</h2>
                            <form action="" class="form-inline">
                                <label for="inputPengiriman" class="sr-only">Pengiriman</label>
                                <select name="inputPengiriman" id="inputPengiriman" class="custom-select mb-2 mr-sm-2">
                                    <option value="Pengiriman" selected>Pengiriman</option>
                                    <option value="JNE">JNE</option>
                                    <option value="J&T">J&T</option>
                                    <option value="Si Cepat">Si Cepat</option>
                                    <option value="Anteraja">Anteraja</option>
                                    <option value="Pos Indonesia">Pos Indonesia</option>

                                </select>
                            </form>
                        </div>
                        <div class="pembayaran mt-3">
                            <h2>Pembayaran</h2>
                            <form action="" class="form-inline">
                                <label for="inputPembayaran" class="sr-only">Pembayaran</label>
                                <select name="inputPembayaran" id="inputPembayaran" class="custom-select mb-2 mr-sm-2">
                                    <option value="Bank" selected>Bank</option>
                                    <option value="BNI">BNI</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BRI">BRI</option>
                                    <option value="Mandiri">Mandiri</option>
                                    <option value="CIMB NIAGA">CIMB NIAGA</option>

                                </select>
                            </form>
                        </div>
                        <div class="note mt-3">
                            <h2>Catatan</h2>
                            <form action="" class="form-inline">
                                <label for="inputCatatan" class="sr-only">Catatan</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" id="inputCatatan" placeholder="Catatan">
                            </form>
                        </div>
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