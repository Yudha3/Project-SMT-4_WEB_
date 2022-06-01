@extends('dashboard')
@section('index')

<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
        <span class="admin_name">Aliffrianto Yudha Prakoso</span>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Order</div>
            <div class="number">18</div>
            <div class="indicator">
              <i class='bx bx-left-arrow-alt right'></i>
              <a href="transaksi.php" class="text">
                See All
              </a>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Produk</div>
            <div class="number">11</div>
            <div class="indicator">
              <i class='bx bx-left-arrow-alt left'></i>
              <a href="barang.php" class="text">
                See All
              </a>
            </div>
          </div>
          <i class='bx bx-box cart two'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Mitra</div>
            <div class="number">1</div>
            <div class="indicator">
              <i class='bx bx-left-arrow-alt up'></i>
              <a href="mitra.php" class="text">
                See All
              </a>
            </div>
          </div>
          <i class='bx bx-badge-check cart three'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Reseller</div>
            <div class="number">1</div>
            <div class="indicator">
              <i class='bx bx-left-arrow-alt down'></i>
              <a href="reseller.php" class="text">
                See All
              </a>
            </div>
          </div>
          <i class='bx bxs-collection cart four'></i>
        </div>
      </div>

      <style>
              .my-box {
        background-color: white;
        padding: 1.4rem;
        margin: 25px 20px;
        border-radius: 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: rgb(16, 37, 88, 0.25);
        /* background-color: #FFF; */
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      }
      .group {
        display: flex;
        float: left;
        align-items: center;
      }
      .icon-untung {
        display: flex;
        align-items: center;
        font-size: 32px;
        color: #355091;
        margin-right: 6px;
      }
      
    </style>

      <div class="my-box">
        <div class="group">
          <i class='bx bxs-badge-dollar ' style="color: #355091; font-size: 32px; margin-right: 6px;"></i>
          <p style="font-size:17px; font-weight:500; ">Total Keuntungan Bulan ini :</p>
        </div>
        <h3>Rp 0,00,-</h3>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales1 box" >
          <div class="card-header1">
            <h3>Recent Transaksi</h3>

            <button>
              <a href="barangKeluar.php" style="text-decoration: none;">Detail</a>
              <span class="bx bx-right-arrow-alt"></span>
            </button>
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
                    <th>Alamat</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                                      <tr>
                      <td align="center">1</td>
                      <td>TRK-2204023</td>
                      <td>20-Apr-2022</td>
                      <td>Yoga testing</td>
                      <td>alamat testing</td>
                      <td>140000</td>
                      <td>Menunggu Pembayaran</td>
                    </tr>
                                      <tr>
                      <td align="center">2</td>
                      <td>TRK-2204022</td>
                      <td>20-Apr-2022</td>
                      <td>yoga</td>
                      <td>jombang</td>
                      <td>90000</td>
                      <td>Menunggu Pembayaran</td>
                    </tr>
                                      <tr>
                      <td align="center">3</td>
                      <td>TRK-2204021</td>
                      <td>16-Apr-2022</td>
                      <td>gftygu</td>
                      <td>fdrthy</td>
                      <td>110000</td>
                      <td>Menunggu Pembayaran</td>
                    </tr>
                                      <tr>
                      <td align="center">4</td>
                      <td>TRK-2204020</td>
                      <td>16-Apr-2022</td>
                      <td>Gyjt</td>
                      <td>tuff</td>
                      <td>55000</td>
                      <td>Menunggu Pembayaran</td>
                    </tr>
                                      <tr>
                      <td align="center">5</td>
                      <td>TRK-2204019</td>
                      <td>08-Apr-2022</td>
                      <td>Yoga</td>
                      <td>jember</td>
                      <td>104999</td>
                      <td>Menunggu Pembayaran</td>
                    </tr>
                                      <tr>
                      <td align="center">6</td>
                      <td>TRK-2202018</td>
                      <td>25-Feb-2022</td>
                      <td>yoga</td>
                      <td>jombang</td>
                      <td>64000</td>
                      <td>Selesai</td>
                    </tr>
                                      <tr>
                      <td align="center">7</td>
                      <td>TRK-2201017</td>
                      <td>20-Jan-2022</td>
                      <td>Yoga Andrian</td>
                      <td>Jombang</td>
                      <td>94000</td>
                      <td>Transaksi sedang diproses</td>
                    </tr>
                                      <tr>
                      <td align="center">8</td>
                      <td>TRK-2201016</td>
                      <td>18-Jan-2022</td>
                      <td>yoga</td>
                      <td>jombang</td>
                      <td>83000</td>
                      <td>Dibayar</td>
                    </tr>
                                      <tr>
                      <td align="center">9</td>
                      <td>TRK-2201015</td>
                      <td>16-Jan-2022</td>
                      <td>p</td>
                      <td>p</td>
                      <td>65000</td>
                      <td>Menunggu Pembayaran</td>
                    </tr>
                                      <tr>
                      <td align="center">10</td>
                      <td>TRK-2201013</td>
                      <td>12-Jan-2022</td>
                      <td>Sinta</td>
                      <td>Jln. Penerbangan</td>
                      <td>119000</td>
                      <td>Selesai</td>
                    </tr>
                                      <tr>
                      <td align="center">11</td>
                      <td>TRK-2201010</td>
                      <td>10-Jan-2022</td>
                      <td>Yoga</td>
                      <td>Jln. Pahlawan</td>
                      <td>94000</td>
                      <td>Selesai</td>
                    </tr>
                                      <tr>
                      <td align="center">12</td>
                      <td>TRK-2201009</td>
                      <td>10-Jan-2022</td>
                      <td>Yoga Putra</td>
                      <td>Jln. Supriyadi No.1</td>
                      <td>108000</td>
                      <td>Selesai</td>
                    </tr>
                                      <tr>
                      <td align="center">13</td>
                      <td>TRK-2201007</td>
                      <td>08-Jan-2022</td>
                      <td>Yoga</td>
                      <td>Jln. Semeru</td>
                      <td>133000</td>
                      <td>Selesai</td>
                    </tr>
                                      <tr>
                      <td align="center">14</td>
                      <td>TRK-2201006</td>
                      <td>07-Jan-2022</td>
                      <td>to</td>
                      <td>to</td>
                      <td>1944000</td>
                      <td>Selesai</td>
                    </tr>
                                      <tr>
                      <td align="center">15</td>
                      <td>TRK-2201004</td>
                      <td>07-Jan-2022</td>
                      <td>Rizky Permadi Syah</td>
                      <td>rt 1 rw 4</td>
                      <td>110000</td>
                      <td>Menunggu Pembayaran</td>
                    </tr>
                                      <tr>
                      <td align="center">16</td>
                      <td>TRK-2201003</td>
                      <td>07-Jan-2022</td>
                      <td>fadillaa</td>
                      <td>dayangan</td>
                      <td>95000</td>
                      <td>Selesai</td>
                    </tr>
                                      <tr>
                      <td align="center">17</td>
                      <td>TRK-2201002</td>
                      <td>07-Jan-2022</td>
                      <td>Mitq M3linda</td>
                      <td>Tugu, Kesamben, Ngoro, Jombang</td>
                      <td>238000</td>
                      <td>Menunggu Pembayaran</td>
                    </tr>
                                      <tr>
                      <td align="center">18</td>
                      <td>TRK-2201001</td>
                      <td>06-Jan-2022</td>
                      <td>Yoga</td>
                      <td>Jombang</td>
                      <td>206000</td>
                      <td>Selesai</td>
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