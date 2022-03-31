<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CasaFarm Monitoring</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link"><span>Monitoring Tanaman</span></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="user-panel mt-1 mb-1 d-flex">
                        <div class="image">
                            <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#">Admin CasaFarm</a>
                        </div>
                    </div>
                </li>
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Monitoring Tanaman</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <h4 class="mb-2">Sistem I</h4>
                    <div class="row">
                    
                        <?php foreach ($sensor as $snr => $value) : ?>
                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-success elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman 1</span>
                                        <span class="info-box-number"><?= $value['tinggi_a'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-warning elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman 2</span>
                                        <span class="info-box-number"><?= $value['tinggi_b'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <!-- fix for small devices only -->
                            <div class="clearfix hidden-md-up"></div>

                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-info elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman 3</span>
                                        <span class="info-box-number"><?= $value['tinggi_c'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-danger elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman 4</span>
                                        <span class="info-box-number"><?= $value['tinggi_d'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                    </div>
                <?php endforeach ?>
                </div>
                <!-- /.row -->

                <div class="container-fluid">
                    <!-- Info boxes -->
                    <h4 class="mb-2">Sistem II</h4>
                    <div class="row">
                        <?php foreach ($sensor2 as $snr => $value) : ?>
                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-success elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman 1</span>
                                        <span class="info-box-number"><?= $value['tinggi_e'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-warning elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman 2</span>
                                        <span class="info-box-number"><?= $value['tinggi_f'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <!-- fix for small devices only -->
                            <div class="clearfix hidden-md-up"></div>

                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-info elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman 3</span>
                                        <span class="info-box-number"><?= $value['tinggi_g'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-danger elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman 4</span>
                                        <span class="info-box-number"><?= $value['tinggi_h'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                    </div>
                <?php endforeach ?>
                </div>
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <h4 class="mb-2">Sistem III</h4>
                    <div class="row">
                        <?php foreach ($sensor3 as $snr => $value) : ?>
                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-success elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman 1</span>
                                        <span class="info-box-number"><?= $value['tinggi_i'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-warning elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman 2</span>
                                        <span class="info-box-number"><?= $value['tinggi_j'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <!-- fix for small devices only -->
                            <div class="clearfix hidden-md-up"></div>

                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-info elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman 3</span>
                                        <span class="info-box-number"><?= $value['tinggi_k'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-danger elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman 4</span>
                                        <span class="info-box-number"><?= $value['tinggi_l'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                    </div>
                <?php endforeach ?>
                </div>

                <div class="container-fluid">
                    <!-- Info boxes -->
                    <h4 class="mb-2">Sistem IV</h4>
                    <div class="row">
                        <?php foreach ($sensor4 as $snr => $value) : ?>
                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-success elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman Is</span>
                                        <span class="info-box-number"><?= $value['tinggi_m'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-warning elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman 2</span>
                                        <span class="info-box-number"><?= $value['tinggi_n'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <!-- fix for small devices only -->
                            <div class="clearfix hidden-md-up"></div>

                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-info elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman 3</span>
                                        <span class="info-box-number"><?= $value['tinggi_o'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <div class="col-12 col-sm-6 col-md-3 ">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-danger elevation-1">
                                        <i class="fas fa-seedling"></i>
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tinggi Tanaman 4</span>
                                        <span class="info-box-number"><?= $value['tinggi_p'] ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                    </div>
                <?php endforeach ?>
                </div>
        </div>
        <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->