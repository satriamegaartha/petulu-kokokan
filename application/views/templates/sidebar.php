<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-user-tie"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/sejarah') ?>">
            <i class="fas fa-fw fa-globe-asia"></i>
            <span>Sejarah</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/lokasi') ?>">
            <i class="fas fa-fw fa-map-marked-alt"></i>
            <span>Lokasi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/galeri') ?>">
            <i class="fas fa-fw fa-images"></i>
            <span>Galeri Burung</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/galeridesa') ?>">
            <i class="fas fa-fw fa-camera"></i>
            <span>Galeri Desa</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/pengunjung') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Pengunjung</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout') ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>