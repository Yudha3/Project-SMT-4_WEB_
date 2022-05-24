@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Mitra {{ $item->nm_mitra }}</h1>
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
            <form action="{{ route('mitra.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nm_mitra">Nama Mitra</label>
                    <input type="text" class="form-control" name="nm_mitra" placeholder="NamaMitra" value="{{ $item->nm_mitra }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ $item->alamat }}">
                </div>
                <div class="form-group">
                    <label for="no_tlp">Nomor Telepon</label>
                    <input type="number" class="form-control" name="no_tlp" placeholder="NomorTelepon" value="{{ $item->no_tlp }}">
                </div>
                <div class="form-group">
                    <label for="tgl_gabung">Tanggal Gabung</label>
                    <input type="date" class="form-control" name="tgl_gabung" placeholder="TanggalGabung" value="{{ $item->tgl_gabung }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Ubah
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection