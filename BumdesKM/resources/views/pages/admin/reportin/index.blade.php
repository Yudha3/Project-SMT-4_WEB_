@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Report In</h1>
    </div>
    <form action="/date" method="post" style="margin-bottom: 1rem;">
        @csrf
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label class="col-form-label">Periode</label>
            </div>
            <div class="col-auto">
                <input type="date" class="form-control" name="from" required>
            </div>
            <div class="col-auto">

            </div>
            <div class="col-auto">
                <input type="date" class="form-control" name="to" required>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" type="submit" name="filter" value="true">Cari</button>
                <button class="btn btn-danger">
                    <a href="/admin/reportin" style="text-decoration: none; color:white;">Back</a>
                </button>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-hover my-0 printTable" border="1" cellpadding="3" id="myTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Nama Barang</th>
                            <th>Harga Beli</th>
                            <th>Jumlah Stok</th>
                            <th>Total Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($brg_msk as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->tgl_masuk }}</td>
                            <td>{{ $item->product->title }}</td>
                            <td>{{ $item->hrg_beli }}</td>
                            <td>{{ $item->jml_stok }}</td>
                            <td>{{ $item->hrg_total }}</td>
                            <td>
                                <a href="{{ route('transactionout.show', $item->id) }}" class="btn btn-primary">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('transactionout.edit', $item->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('transactionout.destroy', $item->id) }}" method="POST" class="d-inline">
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
                            <td colspan="10" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <button id="btn" type="submit" class="btn btn-primary mb-3">Print
                </button>

             
            </div>
        </div>
    </div>
</div>
<!-- container-fluid -->
@endsection

@push('addon-script')
<script>
        $(document).on("click", "#filter", function(e) {
            e.preventDefault();
            var start_date = $("#start_date").val();
            var end_date = $("#end_date").val();
            if (start_date == "" || end_date == "") {
                alert("Both date required");
            } else {
                $('#records').DataTable().destroy();
                fetch(start_date, end_date);
            }
        });
    </script>
    <script>
        function printData() {
            var divToPrint = document.getElementById("myTable");
            newWin = window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
        }
        $('button').on('click', function() {
            // alert('hello')
            printData();
        })
    </script>
@endpush