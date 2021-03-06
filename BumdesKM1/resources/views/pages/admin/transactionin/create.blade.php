@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Barang Masuk</h1>
        <a href="{{ route('transactionin.index') }}" class="btn btn-sm btn-primary shadow-sm">
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
            <form action="{{ route('transactionin.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="tgl_masuk">Tanggal Masuk</label>
                    <input type="date" class="form-control" name="tgl_masuk" placeholder="Tanggal Masuk" value="{{ old('tgl_masuk') }}">
                </div>
                <div class="form-group">
                    <label for="id_product">Product</label>
                    <select name="id_product" id="id_product" required class="form-control">
                        <option value="">Pilih Product</option>
                        @foreach ($product as $product)
                            <option value="{{ $product->id }}">
                                {{ $product->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div id="harga"></div>

                <div class="form-group">
                    <label for="jml_stok">Quantity</label>
                    <input type="number" class="form-control" name="jml_stok" id="jml_stok" placeholder="Qty" value="{{ old('jml_stok') }}">
                </div>
                <div class="form-group">
                    <label for="hrg_total">Total Harga</label>
                    <input type="number" class="form-control" name="hrg_total" id="hrg_total" placeholder="Total" value="{{ old('hrg_total') }}">
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

@push('addon-script')
    <script type="text/javascript" src="{{ url('backend/vendor/jquery/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#jml_stok").keyup(function() {
                var jml_stok = $("#jml_stok").val();
                var price_buy = $("#price_buy").val();

                var hrg_total = parseInt(price_buy) * parseInt(jml_stok);
                $("#hrg_total").val(hrg_total);
            });
        });
    </script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script type="text/javascript">
        $("#id_product").change(function() {
            var id_product = $("#id_product").val();
            $.ajax({
                type: "GET",
                url: "/transactionin/ajax",
                data: "id_product="+id_product,
                cache: false,
                success: function(data){
                    $("#harga").html(data);
                }
            });
        });
    </script>
@endpush