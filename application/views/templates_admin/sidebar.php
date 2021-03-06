<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-15">
                    <i class="fas fa-clipboard"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Data <sup>Artikel</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/dashboard_admin'); ?>">
                    <i class="fas fa-fw fa-clipboard"></i>
                    <span>Daftar Artikel</span></a>
            </li>


            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/Tambah_kategori'); ?>">
                    <i class="fas fa-plus"></i>
                    <span>Kategori</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-1">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kategori
            </div>
            <!-- <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/kategori/news'); ?>">
                    <i class="far fa-newspaper"></i>
                    <span>News</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/kategori/hot'); ?>">
                    <i class="fab fa-hotjar"></i>
                    <span>Hot</span></a>
            </li> 
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/kategori/inet'); ?>">
                    <i class="fab fa-internet-explorer"></i>
                    <span>Inet</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/kategori/sport'); ?>">
                    <i class="fas fa-futbol"></i>
                    <span>Sport</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/kategori/oto'); ?>">
                    <i class="fas fa-car-side"></i>
                    <span>Oto</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/kategori/food'); ?>">
                    <i class="fas fa-utensils"></i>
                    <span>Food</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/kategori/health'); ?>">
                    <i class="fas fa-notes-medical"></i>
                    <span>Health</span></a>
            </li> -->

            <?php $menu = $this->db->get('kategori')->result(); ?>
            <?php foreach ($menu as $m) : ?>

                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url("$m->link"); ?>">
                        <i class="<?= $m->logo ?>"></i>
                        <span><?= $m->kategori ?></span></a>
                </li>
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url("$m->link"); ?>">
                        <i class="<?= $m->logo ?>"></i>
                        <span><?= $m->kategori ?></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url("$m->link"); ?>">
                        <i class="<?= $m->logo ?>"></i>
                        <span><?= $m->kategori ?></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url("$m->link"); ?>">
                        <i class="<?= $m->logo ?>"></i>
                        <span><?= $m->kategori ?></span></a>
                </li> -->
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url("$m->link"); ?>">
                        <i class="<?= $m->logo ?>"></i>
                        <span><?= $m->kategori ?></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url("$m->link"); ?>">
                        <i class="<?= $m->logo ?>"></i>
                        <span><?= $m->kategori ?></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url("$m->link"); ?>">
                        <i class="<?= $m->logo ?>"></i>
                        <span><?= $m->kategori ?></span></a>
                </li> -->

            <?php endforeach; ?>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">



            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item -logout -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>auth/login">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post" action="<?= base_url() ?>admin/dashboard_admin">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Cari data artikel..." name="keyword" autofocus autocomplete="off">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="submit" name="keyword">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <div class="row-mt-3">
                        <div class="col-mr-6">
                            <form action="" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Searh for..." name="keyword">
                                    <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i> </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>



                        <ul class="na navbar-nav navbar-right">
                            <?php if ($this->session->userdata('username')) { ?>
                                <li>
                                    <div>Selamat Datang <?= $this->session->userdata('username') ?></div>
                                </li>

                                <li class="ml-2"><?= anchor('auth/logout', 'Logout'); ?></li>
                            <?php } else { ?>
                                <li class="ml-2"><?= anchor('auth/login', 'Login'); ?></li>
                            <?php } ?>

                        </ul>

                    </ul>
                </nav>