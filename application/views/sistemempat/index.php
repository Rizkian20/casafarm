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
                            <h1 class="m-0">Rekap Data</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Rekap Data</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">No</th>
                                        <th scope="col" class="text-center">Tinggi 1</th>
                                        <th scope="col" class="text-center">Tinggi 2</th>
                                        <th scope="col" class="text-center">Tinggi 3</th>
                                        <th scope="col" class="text-center">Tinggi 4</th>
                                        <th scope="col" class="text-center">Waktu Pengukuran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($sensor as $ds => $value) : ?>
                                        <tr>
                                            <th scope="row"><?= $value['id'] ?></th>
                                            <td class="text-center"><?= $value['tinggi_m'] ?></td>
                                            <td class="text-center"><?= $value['tinggi_n'] ?></td>
                                            <td class="text-center"><?= $value['tinggi_o'] ?></td>
                                            <td class="text-center"><?= $value['tinggi_p'] ?></td>
                                            <td class="text-center"><?= $value['timestamp'] ?>WIB</td>

                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <!-- <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Waktu</th>
                                        <th scope="col">Suhu Air</th>
                                        <th scope="col">pH Air</th>
                                        <th scope="col">Suhu ruang</th>
                                        <th scope="col">Kelembapan</th>
                                        <th scope="col">Ketinggian Tanaman</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>10.00</td>
                                        <td>14 °C</td>
                                        <td>6</td>
                                        <td>30 °C</td>
                                        <td>800 ppm</td>
                                        <td>5 cm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>14.00</td>
                                        <td>15 °C</td>
                                        <td>8</td>
                                        <td>30 °C</td>
                                        <td>775 ppm</td>
                                        <td>5 cm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>16.00</td>
                                        <td>10 °C</td>
                                        <td>7.5</td>
                                        <td>30 °C</td>
                                        <td>750 ppm</td>
                                        <td>6 cm</td>
                                    </tr>
                                </tbody>
                            </table> -->

                        </div>

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