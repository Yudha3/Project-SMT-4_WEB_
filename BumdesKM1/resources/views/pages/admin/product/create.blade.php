@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Product</h1>
        <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary shadow-sm">
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
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Nama Barang</label>
                    <input type="text" class="form-control" name="title" placeholder="NamaBarang" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" rows="10" class="d-block w-100 form-control">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="materials">Bahan</label>
                    <input type="text" class="form-control" name="materials" placeholder="Material" value="{{ old('materials') }}">
                </div>
                <div class="form-group">
                    <label for="price_buy">Harga Beli</label>
                    <input type="number" class="form-control" name="price_buy" placeholder="HargaBeli" value="{{ old('price_buy') }}">
                </div>
                <div class="form-group">
                    <label for="price">Harga Jual</label>
                    <input type="number" class="form-control" name="price" placeholder="HargaJual" value="{{ old('price') }}">
                </div>
                <div class="form-group">
                    <label for="stock">Quantity</label>
                    <input type="number" class="form-control" name="stock" placeholder="Stock" value="{{ old('stock') }}">
                </div>
                <div class="form-group">
                    <label for="weight">Berat</label>
                    <input type="number" class="form-control" name="weight" placeholder="Weight" value="{{ old('weight') }}">
                </div>
                <div class="form-group">
                    <label for="sold">Terjual</label>
                    <input type="number" class="form-control" name="sold" placeholder="Sold" value="{{ old('sold') }}" >
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" placeholder="Image" >
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