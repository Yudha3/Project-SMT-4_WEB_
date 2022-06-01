@extends('dashboard')
@section('transaksimasuk')

<section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Barang Masuk</span>
            </div>
            <div class="profile-details">
                <span class="admin_name">Aliffrianto Yudha Prakoso</span>
            </div>
        </nav>

        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales1 box">
                    <div class="card-header1">
                        <h3>Barang Masuk</h3>

                        <button>
                            <a href="barangmasuk/newBarangmasuk.php" style="text-decoration: none;">Tambah Barang Masuk</a>
                            <span class="bx bx-right-arrow-alt"></span>
                        </button>
                    </div>
                    <div class="card-body1">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Transaksi</th>
                                        <th>Tanggal</th>
                                        <!-- <th>Kode Barang</th> -->
                                        <th>Barang</th>
                                        <th>Pengirim</th>
                                        <th>Jumlah</th>
                                        <th>Total Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td align="center">1</td>
                                            <td>TRM-0122003</td>
                                            <td>10-Jan-2022</td>
                                            <!-- <td>BRG-1221726</td> -->
                                            <td>Miniatur Sepeda</td>
                                            <td>Jaya Abadi</td>
                                            <td>20</td>
                                            <td>Rp 1180000</td>
                                            <td>
                                                <a href="barangmasuk/editBarangmasuk.php?id=64" class="btn-edit" style="font-size:16px; "><i class='bx bxs-edit'></i></a>
                                                <a href="barangmasuk/proses_hapus.php?id=64" onclick="return confirm('Apakah Anda yakin ingin membatalkan stock barang ini dari transaksi masuk? *Stock akan berkurang')" class="btn-hapus" style="font-size:16px; "><i class='bx bx-x-circle'></i></a>
                                                <a href="barangmasuk/pindahData.php?id=64" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi masuk ini? *Data akan dipindahkan ke laporan masuk')" style="font-size:16px; "><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">2</td>
                                            <td>TRM-0122002</td>
                                            <td>10-Jan-2022</td>
                                            <!-- <td>BRG-0122998</td> -->
                                            <td>Case Handphone dari Kayu</td>
                                            <td>Jaya Abadi</td>
                                            <td>5</td>
                                            <td>Rp 80000</td>
                                            <td>
                                                <a href="barangmasuk/editBarangmasuk.php?id=63" class="btn-edit" style="font-size:16px; "><i class='bx bxs-edit'></i></a>
                                                <a href="barangmasuk/proses_hapus.php?id=63" onclick="return confirm('Apakah Anda yakin ingin membatalkan stock barang ini dari transaksi masuk? *Stock akan berkurang')" class="btn-hapus" style="font-size:16px; "><i class='bx bx-x-circle'></i></a>
                                                <a href="barangmasuk/pindahData.php?id=63" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi masuk ini? *Data akan dipindahkan ke laporan masuk')" style="font-size:16px; "><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection