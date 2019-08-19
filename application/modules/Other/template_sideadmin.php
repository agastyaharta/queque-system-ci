<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-hospital"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ruang Meeting</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>Antrianmeeting/index">
            <i class="fas fa-fw fa-procedures"></i>
            <span>Antrian Ruang Meeting</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        More Options
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- ganti href -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url(); ?>Validasiantrian/index">
            <i class="fa fa-fw fa-thumbs-up"></i>
            <span>Validasi Ruang Meeting</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <!-- ganti href -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url(); ?>Insertnewmeeting/index">
            <i class="fas fa-fw fa-handshake"></i>
            <span>Ruang Meeting Baru</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url(); ?>Ruangmeetingadmin/index">
            <i class="fas fa-fw fa-list-ul"></i>
            <span>Daftar Ruang Meeting</span>
        </a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>More</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="login.html">About</a>
                <a class="collapse-item" href="register.html">Help</a>
                <a class="collapse-item" href="forgot-password.html">Report a Problem</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>