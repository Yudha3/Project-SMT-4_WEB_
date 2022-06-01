@extends('dashboard')
@section('laporankeluar')

<section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Laporan Barang Keluar</span>
            </div>
            <div class="profile-details">
                <span class="admin_name">Aliffrianto Yudha Prakoso</span>
            </div>
        </nav>

        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales1 box">
                    <div class="card-header1">
                        <h3>Data Laporan</h3>
                    </div>
                    <form action="reportKeluar.php" method="get" style="margin-bottom: 1rem;">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label class="col-form-label">Periode</label>
                            </div>
                            <div class="col-auto">
                                <input type="date" class="form-control" name="dari" required>
                            </div>
                            <div class="col-auto">
                                -
                            </div>
                            <div class="col-auto">
                                <input type="date" class="form-control" name="ke" required>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary" type="submit" name="filter" value="true">Cari</button>
                                <button class="btn btn-danger">
                                    <a href="reportKeluar.php" style="text-decoration: none; color:white;">Back</a>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="card-body1">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Transaksi</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Penerima</th>
                                        <th>Alamat</th>
                                        <th>Total Transaksi</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td>1</td>
                                            <td>TRK-2202018</td>
                                            <td>25-Feb-2022</td>
                                            <td>yoga</td>
                                            <td>jombang</td>
                                            <td>64.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                                                            <tr>
                                            <td>2</td>
                                            <td>TRK-0122007</td>
                                            <td>09-Jan-2022</td>
                                            <td>Yoga</td>
                                            <td>Jln. Semeru</td>
                                            <td>133.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                                                            <tr>
                                            <td>3</td>
                                            <td>TRK-0122009</td>
                                            <td>09-Jan-2022</td>
                                            <td>Yoga Putra</td>
                                            <td>Jln. Supriyadi No.1</td>
                                            <td>108.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                                                            <tr>
                                            <td>4</td>
                                            <td>TRK-0122007</td>
                                            <td>09-Jan-2022</td>
                                            <td>Yoga</td>
                                            <td>Jln. Semeru</td>
                                            <td>133.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                                                            <tr>
                                            <td>5</td>
                                            <td>TRK-0122006</td>
                                            <td>06-Jan-2022</td>
                                            <td>to</td>
                                            <td>to</td>
                                            <td>1.944.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                                                            <tr>
                                            <td>6</td>
                                            <td>TRK-0122002</td>
                                            <td>05-Jan-2022</td>
                                            <td>Mitq M3linda</td>
                                            <td>Tugu, Kesamben, Ngoro, Jombang</td>
                                            <td>238.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                                                            <tr>
                                            <td>7</td>
                                            <td>TRK-0122001</td>
                                            <td>03-Jan-2022</td>
                                            <td>Yoga Andrian</td>
                                            <td>Jln. Gajah Mada</td>
                                            <td>177.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                                                            <tr>
                                            <td>8</td>
                                            <td>TRK-0122002</td>
                                            <td>01-Jan-2022</td>
                                            <td>Yoga </td>
                                            <td>Jombang</td>
                                            <td>159.000</td>
                                            <td>Selesai</td>
                                        </tr>
                                                                    </tbody>
                            </table>
                            <button class="btn btn-primary">
                                <a href="print2.php" style="text-decoration: none; color:white;">Cetak PDF</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection