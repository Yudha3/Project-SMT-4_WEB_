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
            <input type="date" class="form-control" name="tgl_masuk" placeholder="Tanggal Masuk"
              value="{{ old('tgl_masuk') }}">
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
          <input id="hrg_beli" type="hidden" name="hrg_beli">
          <div class="form-group">
            <label for="jml_stok">Quantity</label>
            <div class="input-group-prepend">
              <input type="number" class="form-control" name="jml_stok" id="jml_stok" placeholder="Qty"
                value="{{ old('jml_stok', 1) }}">
              <span class="input-group-text" id="basic-addon1">Unit</span>
            </div>
          </div>
          <div class="form-group">
            <label for="hrg_total">Total Harga</label>
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Rp.</span>
              <input type="number" class="form-control" name="hrg_total" id="hrg_total" placeholder="Total"
                value="{{ old('hrg_total') }}" readonly>
            </div>
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
  <script type="text/javascript" src="{{ url('backend/js/jquery-1.10.2.js') }}"></script>
  <script type="text/javascript">
    var productPrice = 0

    $(document).ready(function() {
      $('#id_product').on('change', function() {
        getProductData(this.value)
      })

      $('#jml_stok').on('input', function() {
        $('#hrg_total').val(productPrice * this.value)
      })
    });


    async function getProductData(productId) {
      if (productId != '') {
        var url = '{{ route('getProductDetail', ':id') }}'
        url = url.replace(':id', productId)
        var product = await $.get(url, (data) => data)

        productPrice = product.price_buy

        $('#hrg_total').val(product.price_buy * $('#jml_stok').val())
        $('#hrg_beli').val(product.price_buy)
      } else {
        $('#hrg_total').val('')
      }
    }
  </script>
@endpush
