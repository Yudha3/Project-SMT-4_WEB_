@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaction In</h1>
        <a href="{{ route('transactionin.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Transaksi Barang Masuk
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Nama Barang</th>
                            <th>Harga Beli</th>
                            <th>Stok Masuk</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($brg_msk as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->tgl_masuk }}</td>
                                <td>{{ $item->product->title }}</td>
                                <td>Rp. {{ $item->product->price_buy }}</td>
                                <td>{{ $item->jml_stok }} Unit</td>
                                <td>Rp. {{ $item->hrg_total }}</td>
                                <td>
                                    {{--  <a href="{{ route('transactionin.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>  --}}
                                    <form action="{{ route('transactionin.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- container-fluid -->
@endsection