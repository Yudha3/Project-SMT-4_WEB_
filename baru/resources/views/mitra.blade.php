@extends('dashboard')
@section('mitra')

<section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Mitra</span>
            </div>
            <div class="profile-details">
                <span class="admin_name">Aliffrianto Yudha Prakoso</span>
            </div>
        </nav>

        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales1 box">
                    <div class="card-header1">
                        <h3>Recent Mitra</h3>

                        <button>
                            <a href="mitra/newMitra.php" style="text-decoration: none;">Tambah Mitra</a>
                            <span class="bx bx-right-arrow-alt"></span>
                        </button>
                    </div>
                    <div class="card-body1">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Mitra</th>
                                        <th>Nama Mitra</th>
                                        <th>Alamat</th>
                                        <th>Nomer Telepon</th>
                                        <th>Tanggal Gabung</th>
                                        <th>Barang</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td align="center">1</td>
                                            <td>MTR-012261</td>
                                            <td>Jaya Abadi</td>
                                            <td>Patrang</td>
                                            <td>85731379198</td>
                                            <td>2022-01-01</td>
                                            <td>Miniatur Sepeda</td>
                                            <td>
                                                <a href="mitra/editMitra.php?id=26" class="btn-edit"><i class='bx bxs-edit'></i></a>
                                                <a href="mitra/proses_hapus.php?id=26" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn-hapus"><i class='bx bx-trash'></i></a>
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