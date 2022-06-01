@extends('dashboard')
@section('transaksikeluar')

<section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Barang Keluar</span>
            </div>
            <div class="profile-details">
                <span class="admin_name">Aliffrianto Yudha Prakoso</span>
            </div>
        </nav>

        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales1 box">
                    <div class="card-header1">
                        <h3>Order list</h3>
                    </div>
                    <div class="card-body1">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Transaksi</th>
                                        <th>Tanggal</th>
                                        <th>Penerima</th>
                                        <th>Total Harga</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td align="center">1</td>
                                            <td>TRK-2204023</td>
                                            <td>20-Apr-2022</td>
                                            <td>Yoga testing</td>
                                            <td>Rp 140000</td>
                                            <td>Menunggu Pembayaran</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2204023" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2204023" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">2</td>
                                            <td>TRK-2204022</td>
                                            <td>20-Apr-2022</td>
                                            <td>yoga</td>
                                            <td>Rp 90000</td>
                                            <td>Menunggu Pembayaran</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2204022" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2204022" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">3</td>
                                            <td>TRK-2204021</td>
                                            <td>16-Apr-2022</td>
                                            <td>gftygu</td>
                                            <td>Rp 110000</td>
                                            <td>Menunggu Pembayaran</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2204021" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2204021" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">4</td>
                                            <td>TRK-2204020</td>
                                            <td>16-Apr-2022</td>
                                            <td>Gyjt</td>
                                            <td>Rp 55000</td>
                                            <td>Menunggu Pembayaran</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2204020" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2204020" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">5</td>
                                            <td>TRK-2204019</td>
                                            <td>08-Apr-2022</td>
                                            <td>Yoga</td>
                                            <td>Rp 104999</td>
                                            <td>Menunggu Pembayaran</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2204019" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2204019" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">6</td>
                                            <td>TRK-2202018</td>
                                            <td>25-Feb-2022</td>
                                            <td>yoga</td>
                                            <td>Rp 64000</td>
                                            <td>Selesai</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2202018" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2202018" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">7</td>
                                            <td>TRK-2201017</td>
                                            <td>20-Jan-2022</td>
                                            <td>Yoga Andrian</td>
                                            <td>Rp 94000</td>
                                            <td>Transaksi sedang diproses</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2201017" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2201017" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">8</td>
                                            <td>TRK-2201016</td>
                                            <td>18-Jan-2022</td>
                                            <td>yoga</td>
                                            <td>Rp 83000</td>
                                            <td>Dibayar</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2201016" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2201016" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">9</td>
                                            <td>TRK-2201015</td>
                                            <td>16-Jan-2022</td>
                                            <td>p</td>
                                            <td>Rp 65000</td>
                                            <td>Menunggu Pembayaran</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2201015" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2201015" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">10</td>
                                            <td>TRK-2201013</td>
                                            <td>12-Jan-2022</td>
                                            <td>Sinta</td>
                                            <td>Rp 119000</td>
                                            <td>Selesai</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2201013" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2201013" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">11</td>
                                            <td>TRK-2201010</td>
                                            <td>10-Jan-2022</td>
                                            <td>Yoga</td>
                                            <td>Rp 94000</td>
                                            <td>Selesai</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2201010" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2201010" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">12</td>
                                            <td>TRK-2201009</td>
                                            <td>10-Jan-2022</td>
                                            <td>Yoga Putra</td>
                                            <td>Rp 108000</td>
                                            <td>Selesai</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2201009" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2201009" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">13</td>
                                            <td>TRK-2201007</td>
                                            <td>08-Jan-2022</td>
                                            <td>Yoga</td>
                                            <td>Rp 133000</td>
                                            <td>Selesai</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2201007" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2201007" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">14</td>
                                            <td>TRK-2201006</td>
                                            <td>07-Jan-2022</td>
                                            <td>to</td>
                                            <td>Rp 1944000</td>
                                            <td>Selesai</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2201006" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2201006" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">15</td>
                                            <td>TRK-2201004</td>
                                            <td>07-Jan-2022</td>
                                            <td>Rizky Permadi Syah</td>
                                            <td>Rp 110000</td>
                                            <td>Menunggu Pembayaran</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2201004" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2201004" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">16</td>
                                            <td>TRK-2201003</td>
                                            <td>07-Jan-2022</td>
                                            <td>fadillaa</td>
                                            <td>Rp 95000</td>
                                            <td>Selesai</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2201003" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2201003" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">17</td>
                                            <td>TRK-2201002</td>
                                            <td>07-Jan-2022</td>
                                            <td>Mitq M3linda</td>
                                            <td>Rp 238000</td>
                                            <td>Menunggu Pembayaran</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2201002" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2201002" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">18</td>
                                            <td>TRK-2201001</td>
                                            <td>06-Jan-2022</td>
                                            <td>Yoga</td>
                                            <td>Rp 206000</td>
                                            <td>Selesai</td>
                                            <td>
                                                <a href="transaksi/editBarangkeluar.php?id_transaksi=TRK-2201001" class="btn-edit"><i class='bx bxs-show'></i></a>
                                                <a href="transaksi/pindahData.php?id_transaksi=TRK-2201001" class="btn-selesai" onclick="return confirm('Apakah anda yakin ingin menyelesaikan transaksi keluar ini? *Data akan dipindahkan ke laporan keluar')"><i class='bx bx-check-circle'></i></a>
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