@extends('dashboard')
@section('product')

<section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Product</span>
            </div>
            <div class="profile-details">
                <span class="admin_name">Aliffrianto Yudha Prakoso</span>
            </div>
        </nav>

        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales1 box">
                    <div class="card-header1">
                        <h3>Recent Product</h3>

                        <button>
                            <a href="barang/newBarang.php" style="text-decoration: none;">Tambah Product</a>
                            <span class="bx bx-right-arrow-alt"></span>
                        </button>
                    </div>
                    <div class="card-body1">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Harga Barang</th>
                                        <th>Stok Barang</th>
                                        <th>Gambar Barang</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td align="center">1</td>
                                            <td>BRG-0122048</td>
                                            <td>Kotak Tisu dari Kayu</td>
                                            <td>Rp 35000</td>
                                            <td>37</td>
                                            <td style="text-align: center;"><img src="{{asset('assets/images/barang/792-11567409_A1.jpg') }}" style="width: 120px;"></td>
                                            <td>
                                                <a href="barang/editBarang.php?id_brg=BRG-0122048" class="btn-edit"><i class='bx bxs-edit'></i></a>
                                                <a href="barang/proses_hapus.php?id_brg=BRG-0122048 &gambar=792-11567409_A1.jpg" class="btn-hapus" onclick="return confirm('Anda yakin akan menghapus data ini?')" ><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">2</td>
                                            <td>BRG-0122059</td>
                                            <td>Vas Bunga Mini</td>
                                            <td>Rp 30000</td>
                                            <td>15</td>
                                            <td style="text-align: center;"><img src="{{asset('assets/images/barang/512-Vas-Bunga-2.jpg') }}" style="width: 120px;"></td>
                                            <td>
                                                <a href="barang/editBarang.php?id_brg=BRG-0122059" class="btn-edit"><i class='bx bxs-edit'></i></a>
                                                <a href="barang/proses_hapus.php?id_brg=BRG-0122059 &gambar=512-Vas-Bunga-2.jpg" class="btn-hapus" onclick="return confirm('Anda yakin akan menghapus data ini?')" ><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">3</td>
                                            <td>BRG-0122103</td>
                                            <td>Lampu Bambu</td>
                                            <td>Rp 48000</td>
                                            <td>15</td>
                                            <td style="text-align: center;"><img src="{{asset('assets/images/barang/64-lampubambu.png') }}" style="width: 120px;"></td>
                                            <td>
                                                <a href="barang/editBarang.php?id_brg=BRG-0122103" class="btn-edit"><i class='bx bxs-edit'></i></a>
                                                <a href="barang/proses_hapus.php?id_brg=BRG-0122103 &gambar=64-lampubambu.png" class="btn-hapus" onclick="return confirm('Anda yakin akan menghapus data ini?')" ><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">4</td>
                                            <td>BRG-0122326</td>
                                            <td>Asbak Elang </td>
                                            <td>Rp 60000</td>
                                            <td>20</td>
                                            <td style="text-align: center;"><img src="{{asset('assets/images/barang/982-Asbak-Elang-B5.jpg') }}" style="width: 120px;"></td>
                                            <td>
                                                <a href="barang/editBarang.php?id_brg=BRG-0122326" class="btn-edit"><i class='bx bxs-edit'></i></a>
                                                <a href="barang/proses_hapus.php?id_brg=BRG-0122326 &gambar=982-Asbak-Elang-B5.jpg" class="btn-hapus" onclick="return confirm('Anda yakin akan menghapus data ini?')" ><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">5</td>
                                            <td>BRG-0122588</td>
                                            <td>Gantungan Kunci Kayu</td>
                                            <td>Rp 4000</td>
                                            <td>46</td>
                                            <td style="text-align: center;"><img src="{{asset('assets/images/barang/267-bahan-material-Kerajinan-Gantungan-Kunci-unik-Kayu-Jati-bagus.jpg') }}" style="width: 120px;"></td>
                                            <td>
                                                <a href="barang/editBarang.php?id_brg=BRG-0122588" class="btn-edit"><i class='bx bxs-edit'></i></a>
                                                <a href="barang/proses_hapus.php?id_brg=BRG-0122588 &gambar=267-bahan-material-Kerajinan-Gantungan-Kunci-unik-Kayu-Jati-bagus.jpg" class="btn-hapus" onclick="return confirm('Anda yakin akan menghapus data ini?')" ><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">6</td>
                                            <td>BRG-0122852</td>
                                            <td>Dakon Congklak </td>
                                            <td>Rp 85000</td>
                                            <td>0</td>
                                            <td style="text-align: center;"><img src="{{asset('assets/images/barang/994-Dakon-Cengklok-3.jpg') }}" style="width: 120px;"></td>
                                            <td>
                                                <a href="barang/editBarang.php?id_brg=BRG-0122852" class="btn-edit"><i class='bx bxs-edit'></i></a>
                                                <a href="barang/proses_hapus.php?id_brg=BRG-0122852 &gambar=994-Dakon-Cengklok-3.jpg" class="btn-hapus" onclick="return confirm('Anda yakin akan menghapus data ini?')" ><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">7</td>
                                            <td>BRG-0122998</td>
                                            <td>Case Handphone dari Kayu</td>
                                            <td>Rp 25000</td>
                                            <td>32</td>
                                            <td style="text-align: center;"><img src="{{asset('assets/images/barang/594-Ide Kerajinan Tangan Dari Kayu Bekas 13.jpg') }}" style="width: 120px;"></td>
                                            <td>
                                                <a href="barang/editBarang.php?id_brg=BRG-0122998" class="btn-edit"><i class='bx bxs-edit'></i></a>
                                                <a href="barang/proses_hapus.php?id_brg=BRG-0122998 &gambar=594-Ide Kerajinan Tangan Dari Kayu Bekas 13.jpg" class="btn-hapus" onclick="return confirm('Anda yakin akan menghapus data ini?')" ><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">8</td>
                                            <td>BRG-0222462</td>
                                            <td>Asbak Ukir</td>
                                            <td>Rp 14999</td>
                                            <td>19</td>
                                            <td style="text-align: center;"><img src="{{asset('assets/images/barang/529-bamboo-373814_1280.jpg') }}" style="width: 120px;"></td>
                                            <td>
                                                <a href="barang/editBarang.php?id_brg=BRG-0222462" class="btn-edit"><i class='bx bxs-edit'></i></a>
                                                <a href="barang/proses_hapus.php?id_brg=BRG-0222462 &gambar=529-bamboo-373814_1280.jpg" class="btn-hapus" onclick="return confirm('Anda yakin akan menghapus data ini?')" ><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">9</td>
                                            <td>BRG-1221726</td>
                                            <td>Miniatur Sepeda</td>
                                            <td>Rp 65000</td>
                                            <td>60</td>
                                            <td style="text-align: center;"><img src="{{asset('assets/images/barang/540-miniatur_sepeda.jpg') }}" style="width: 120px;"></td>
                                            <td>
                                                <a href="barang/editBarang.php?id_brg=BRG-1221726" class="btn-edit"><i class='bx bxs-edit'></i></a>
                                                <a href="barang/proses_hapus.php?id_brg=BRG-1221726 &gambar=540-miniatur_sepeda.jpg" class="btn-hapus" onclick="return confirm('Anda yakin akan menghapus data ini?')" ><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">10</td>
                                            <td>BRG-1221744</td>
                                            <td>Miniatur Becak</td>
                                            <td>Rp 79000</td>
                                            <td>12</td>
                                            <td style="text-align: center;"><img src="{{asset('assetes/images/barang/554-miniatur_becak.jpg') }}" style="width: 120px;"></td>
                                            <td>
                                                <a href="barang/editBarang.php?id_brg=BRG-1221744" class="btn-edit"><i class='bx bxs-edit'></i></a>
                                                <a href="barang/proses_hapus.php?id_brg=BRG-1221744 &gambar=554-miniatur_becak.jpg" class="btn-hapus" onclick="return confirm('Anda yakin akan menghapus data ini?')" ><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td align="center">11</td>
                                            <td>BRG-1221816</td>
                                            <td>Kotak Pensil Kayu Bertingkat</td>
                                            <td>Rp 32000</td>
                                            <td>45</td>
                                            <td style="text-align: center;"><img src="{{asset('assetss/images/barang/511-Kotak-Pensil-Bertingkat-Dari-Kayu.jpg') }}" style="width: 120px;"></td>
                                            <td>
                                                <a href="barang/editBarang.php?id_brg=BRG-1221816" class="btn-edit"><i class='bx bxs-edit'></i></a>
                                                <a href="barang/proses_hapus.php?id_brg=BRG-1221816 &gambar=511-Kotak-Pensil-Bertingkat-Dari-Kayu.jpg" class="btn-hapus" onclick="return confirm('Anda yakin akan menghapus data ini?')" ><i class='bx bx-trash'></i></a>
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