<!-- Brand Logo -->
<a href="#" class="brand-link">
    <img src="{{ asset('AdminLTE/dist/img/logo/logo.png') }}" alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">PERPUSTAKAAN</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">WAHYU NADYA PUTRI</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/Dashboard" class="nav-link {{ request()->is('Dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/Buku" class="nav-link {{ request()->is('Buku') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>Buku</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/Pinjaman" class="nav-link {{ request()->is('Pinjaman') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Pinjaman</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/Pengembalian" class="nav-link {{ request()->is('Pengembalian') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-undo-alt"></i>
                    <p>Pengembalian</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/Kategori" class="nav-link {{ request()->is('Kategori') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>Kategori</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/Rak" class="nav-link {{ request()->is('Rak') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-box"></i>
                    <p>Rak</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/Settings" class="nav-link {{ request()->is('Settings') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>Settings</p>
                </a>
            </li>

             <li class="nav-item">
                <a href="{{ url('/Logout') }}" class="nav-link {{ request()->is('Settings') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
