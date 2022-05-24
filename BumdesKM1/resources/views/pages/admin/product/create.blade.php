@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Product</h1>
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
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_brg">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_brg" placeholder="NamaBarang" value="{{ old('nama_brg') }}">
                </div>
                <div class="form-group">
                    <label for="tgl_mskBrg">Tanggal Masuk Barang</label>
                    <input type="date" class="form-control" name="tgl_mskBrg" placeholder="TanggalMasuk" value="{{ old('tgl_mskBrg') }}">
                </div>
                <div class="form-group">
                    <label for="hrg_beli">Harga Beli</label>
                    <input type="number" class="form-control" name="hrg_beli" placeholder="HargaBeli" value="{{ old('hrg_beli') }}">
                </div>
                <div class="form-group">
                    <label for="hrg_jual">Harga Jual</label>
                    <input type="number" class="form-control" name="hrg_jual" placeholder="HargaJual" value="{{ old('hrg_jual') }}">
                </div>
                <div class="form-group">
                    <label for="stok">Quantity</label>
                    <input type="number" class="form-control" name="stok" placeholder="Stok" value="{{ old('stok') }}">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" rows="10" class="d-block w-100 form-control">{{ old('deskripsi') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection