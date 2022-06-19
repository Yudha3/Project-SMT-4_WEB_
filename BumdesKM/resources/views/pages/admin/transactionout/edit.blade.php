@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Transaction Out {{ $item->title }}</h1>
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
            <form action="{{ route('transactionout.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" required class="form-control">
                        <option value="{{ $item->status }}">
                            Jangan Ubah ({{ $item->status }})
                        </option>
                        <option value="PENDING">Pending</option>
                        <option value="ON_PROCESS">On Process</option>
                        <option value="ON_DELIVERY">On Delivery</option>
                        <option value="SUCCESS">Success</option>
                        <option value="CANCEL">Cancel</option>
                        <option value="FAILED">Failed</option>
                    </select>
                </div>
                <div class="form-group >
                    <label for="resi">Resi</label>
                    <input type="text" class="form-control" name="resi" placeholder="Resi" value="{{ $item->resi }}" {{ $validation }} />
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