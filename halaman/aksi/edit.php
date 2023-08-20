<?=
    require_once '../connection.php';

    $kon = koneksi();

    $id = mysqli_real_escape_string($kon, $_GET['id']);
    $sql = "SELECT * FROM pegawai WHERE id_pegawai = '$id'";
    $result = mysqli_query($kon, $sql);
    while($data = mysqli_fetch_assoc($result)){
        $nama = $data['nama_pegawai'];
        $pendidikan = $data['pendidikan'];
        $sekolah = $data['nama_sekolah'];
        $ijazah = $data['tahun_ijazah'];
        $studi = $data['bidang_studi'];
        $negara = $data['negara'];
        $mulai = $data['tahun_mulai'];
        $status = $data['stat'];
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - edit</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../../resource/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                    <!-- Navbar Brand-->
                    <a class="navbar-brand ps-3" href="../index.php">Tugas magang</a>
                    <!-- Sidebar Toggle-->
                    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                    <!-- Navbar Search-->
                    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <!-- Navbar-->
                    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Settings</a></li>
                                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
            </nav>
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <div class="sb-sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="../index.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="card-body" style="margin:80px auto;width:850px;">
                <form class="row g-3" action="../prosesEdit.php" method="post">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">id pegawai</label>
                        <input type="text" class="form-control" value="<?php echo $id;?>" name="id">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nama pegawai</label>
                        <input type="text" class="form-control" value="<?php echo $nama;?>" name="nama">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Pendidikan</label>
                        <input type="text" class="form-control" value="<?php echo $pendidikan;?>" name="pendidikan">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Sekolah</label>
                        <input type="text" class="form-control" value="<?php echo $sekolah;?>" name="sekolah">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Tahun ijazah</label>
                        <input type="number" class="form-control" value="<?php echo $ijazah;?>" name="ijazah">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Bidang studi</label>
                        <input type="text" class="form-control" value="<?php echo $studi;?>" name="studi">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Negara</label>
                        <input type="text" class="form-control" value="<?php echo $negara?>" name="negara">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Tahun mulai</label>
                        <input type="number" class="form-control" value="<?php echo $mulai?>" name="mulai">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Status</label>
                        <input type="text" class="form-control" value="<?php echo $status?>" name="status">
                    </div>

                    <div class="tombol mt-5">
                        <input type="submit" class="btn btn-success" value="submit" style="width:250px;">
                        <input type="submit" class="btn btn-secondary ms-5" value="batal" style="width:250px;">
                    </div>
                </form>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../resource/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../../resource/assets/demo/chart-area-demo.js"></script>
        <script src="../../resource/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../../resource/js/datatables-simple-demo.js"></script>
    </body>
</html>
