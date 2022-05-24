<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
                <div class="sidebar-brand-text mx-3">Bumdes Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('product.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Product</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('gallery.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Galeri Product</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('mitra.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Mitra</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Transaksi</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('product.index') }}">Transaksi Masuk</a>
                        <a class="collapse-item" href="#">Transaksi Keluar</a>
                        <a class="collapse-item" href="#">Pre Order</a>
                    </div>
                </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Laporan Masuk</a>
                        <a class="collapse-item" href="#">Laporan Keluar</a>
                    </div>
                </div>
            </li>

            {{--  <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>  --}}

            {{--  <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('product.index') }}">Product</a>
                        <a class="collapse-item" href="#">Mitra</a>
                    </div>
                </div>
            </li>  --}}

            <!-- Divider -->
            <hr class="sidebar-divider">

            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->