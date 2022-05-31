@extends('dashboard')
@section('reseller')

<section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Reseller</span>
            </div>
            <div class="profile-details">
                <span class="admin_name">Aliffrianto Yudha Prakoso</span>
            </div>
        </nav>

        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales1 box">
                    <div class="card-header1">
                        <h3>Recent Reseller</h3>

                        <button>
                            <a href="reseller/newReseller.php" style="text-decoration: none;">Tambah Reseller</a>
                            <span class="bx bx-right-arrow-alt"></span>
                        </button>
                    </div>
                    <div class="card-body1">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Reseller</th>
                                        <th>Nama Reseller</th>
                                        <th>Alamat</th>
                                        <th>Nomer Telepon</th>
                                        <th>Tanggal Gabung</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td align="center">1</td>
                                            <td>RSL-012268</td>
                                            <td>Anton</td>
                                            <td>Bondowoso</td>
                                            <td>085731379189</td>
                                            <td>2022-01-06</td>
                                            <td>
                                                <a href="reseller/editReseller.php?id=8" class="btn-edit"><i class='bx bxs-edit'></i></a>
                                                <a href="reseller/proses_hapus.php?id=8" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn-hapus"><i class='bx bx-trash'></i></a>
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