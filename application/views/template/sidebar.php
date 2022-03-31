<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Hidroponik CasaFarm</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="form-inline mt-3">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            </ul>
        </nav>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="<?= base_url('dashboard/index') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('sistemsatu/index') ?>" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Sistem I
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('sistemdua/index') ?>" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Sistem II
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('sistemtiga/index') ?>" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Sistem III
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('sistemempat/index') ?>" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Sistem IV
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?= base_url('blockhash/index') ?>" class="nav-link">
                        <i class="nav-icon fas fa-shield-alt"></i>
                        <p>
                            Blockhash
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li> -->
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>