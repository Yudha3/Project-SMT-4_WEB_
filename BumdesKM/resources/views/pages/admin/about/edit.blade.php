@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit About</h1>
        <a href="{{ route('about.index') }}" class="btn btn-sm btn-primary shadow-sm">
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
            <form action="{{ route('about.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="pengelola">Nama Pengelola</label>
                    <input type="text" class="form-control" name="pengelola" placeholder="Nama Pengelola" value="{{ $item->pengelola }}">
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="number" class="form-control" name="contact" placeholder="Contact" value="{{ $item->contact }}">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <textarea name="address" rows="10" class="d-block w-100 form-control">{{ $item->address }}</textarea>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" rows="10" class="d-block w-100 form-control">{{ $item->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" placeholder="Image" value="{{ $item->image }}" >
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