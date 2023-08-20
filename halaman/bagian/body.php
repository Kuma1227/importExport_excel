
<?php
    require_once 'chart.php';
?>

<div id="layoutSidenav">
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-6" style="width:900px;">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="1000%" height="600%"></canvas></div>
                                </div>
                            </div>
                            <!-- script membuat infografis -->
                            <script>
                                let ctx = document.getElementById('myBarChart').getContext('2d');
                                let chart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: <?php echo $dataNamaPegawai; ?>,
                                        datasets: [{
                                            label: 'tahun berkuliah',
                                            data: <?php echo $dataTahun?>,
                                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                            borderColor: 'rgba(75, 192, 192, 1)',
                                            borderWidth: 1
                                        }]
                                    },

                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            </script>
                        </div>
                        <div class="card mb-4" style="width:1550px;">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <!-- cara baru untuk memanggil halaman -->
                                <a href="form_import.php" class="btn btn-success mb-4">Import data</a>
                                <table id="datatablesSimple" width="1500px">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama pegawai</th>
                                            <th>Pendidikan</th>
                                            <th>Nama sekolah</th>
                                            <th>Tahun ijazah</th>
                                            <th>Bidang studi</th>
                                            <th>Negara</th>
                                            <th>Tahun mulai</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                            $kon;

                                            $no = 1;
                                            $tampilData = mysqli_query($kon, 'SELECT * FROM pegawai order by id_pegawai desc');

                                            while($data = mysqli_fetch_assoc($tampilData)) :
                                       ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $data['nama_pegawai'];?> </td>
                                                <td><?php echo $data['pendidikan'];?></td>
                                                <td><?php echo $data['nama_sekolah'];?></td>
                                                <td><?php echo $data['tahun_ijazah'];?></td>
                                                <td><?php echo $data['bidang_studi'];?></td>
                                                <td><?php echo $data['negara'];?></td>
                                                <td><?php echo $data['tahun_mulai']?></td>
                                                <td><?php echo $data['stat'];?></td>
                                                <td>
                                                    <a class="btn btn-success" href="../halaman/aksi/edit.php?id=<?php echo $data['id_pegawai']?>">Edit</a>
                                                    <a class="btn btn-danger mt-1" href="../halaman/aksi/hapus.php?id=<?php echo $data['id_pegawai']?>">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
</div>