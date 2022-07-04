@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Transaction Out {{ $item->user->name }}</h1>
        <a href="{{ route('transactionout.index') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-arrow-right fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $item->id }}</td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td>{{ $item->date }}</td>
                </tr>
                <tr>
                    <th>Penerima</th>
                    <td>{{ $item->user->name }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $item->address }}</td>
                </tr>
                <tr>
                    <th>Nomor Telepon</th>
                    <td>{{ $item->phone }}</td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>Rp. {{ $item->total }}</td>
                </tr>
                <tr>
                    <th>Status Transaksi</th>
                    <td>{{ $item->status }}</td>
                </tr>
                <tr>
                    @foreach ($item->payment as $payment)
                        <th>Payment</th>
                        <td>{{ $payment->payment }}</td>
                    @endforeach
                </tr>
                <tr>
                    @foreach ($item->payment as $payment)
                        <th>Status Payment</th>
                        <td>{{ $payment->status }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th>Pembelian</th>
                    <td>
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Nama Barang</th>
                                <th>Quantity</th>
                                <th>SubTotal</th>
                            </tr>
                            @foreach ($item->details as $detail)
                                <tr>
                                    <th>{{ $detail->id }}</th>
                                    <th>{{ $detail->product->title }}</th>
                                    <th>{{ $detail->qty }}</th>
                                    <th>{{ $detail->subtotal }}</th>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection