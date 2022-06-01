@extends('dashboard')
@section('laporanmasuk')

<section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Laporan Barang Masuk</span>
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
                    <form action="reportMasuk.php" method="get" style="margin-bottom: 1rem;">
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
                                    <a href="reportMasuk.php" style="text-decoration: none; color:white;">Back</a>
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
                                        <th>Barang</th>
                                        <th>Pengirim</th>
                                        <th>Jumlah</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td>1</td>
                                            <td>TRM-0122004</td>
                                            <td>12-Jan-2022</td>
                                            <td>Kotak Pensil Kayu Bertingkat</td>
                                            <td>Jaya Abadi</td>
                                            <td>30</td>
                                            <td>750.000</td>
                                        </tr>
                                                                            <tr>
                                            <td>2</td>
                                            <td>TRM-0122001</td>
                                            <td>10-Jan-2022</td>
                                            <td>Kotak Tisu dari Kayu</td>
                                            <td>Jaya Abadi</td>
                                            <td>2</td>
                                            <td>40.000</td>
                                        </tr>
                                                                            <tr>
                                            <td>3</td>
                                            <td>TRM-0122004</td>
                                            <td>11-Jan-2022</td>
                                            <td>Kotak Tisu dari Kayu</td>
                                            <td>Jaya Abadi</td>
                                            <td>5</td>
                                            <td>100.000</td>
                                        </tr>
                                                                            <tr>
                                            <td>4</td>
                                            <td>TRM-0122004</td>
                                            <td>11-Jan-2022</td>
                                            <td>Miniatur Sepeda</td>
                                            <td>Jaya Abadi</td>
                                            <td>20</td>
                                            <td>1.180.000</td>
                                        </tr>
                                                                            <tr>
                                            <td>5</td>
                                            <td>TRM-0122003</td>
                                            <td>10-Jan-2022</td>
                                            <td>Miniatur Sepeda</td>
                                            <td>Jaya Abadi</td>
                                            <td>20</td>
                                            <td>1.180.000</td>
                                        </tr>
                                                                            <tr>
                                            <td>6</td>
                                            <td>TRM-0122002</td>
                                            <td>10-Jan-2022</td>
                                            <td>Case Handphone dari Kayu</td>
                                            <td>Jaya Abadi</td>
                                            <td>5</td>
                                            <td>80.000</td>
                                        </tr>
                                                                            <tr>
                                            <td>7</td>
                                            <td>TRM-0122001</td>
                                            <td>10-Jan-2022</td>
                                            <td>Kotak Tisu dari Kayu</td>
                                            <td>Jaya Abadi</td>
                                            <td>2</td>
                                            <td>40.000</td>
                                        </tr>
                                                                    </tbody>
                            </table>
                            <button class="btn btn-primary">
                                <a href="print1.php" style="text-decoration: none; color:white;">Cetak PDF</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection