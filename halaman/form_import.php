<?=
    require_once 'connection.php';

    $kon = koneksi();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Import</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../resource/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?=
            include_once 'bagian/navbar.php';
        ?>
        <?=
            include_once 'bagian/sideNavbar.php';
        ?>

            <div class="card-body" style="margin:80px auto;width:850px;">
                <form action="prosesImport.php" method="post" enctype="multipart/form-data">
                    <h1 style="margin-top:-20px">Import data</h1>
                    <div class="mb-3 mt-5">
                        <label for="exampleFormControlInput1" class="form-label">Import disini</label>
                        <input type="file" name="file" class="form-control" id="exampleFormControlInput1" required='true'>
                    </div>
                    <input type="submit" value="Import" class="btn btn-primary" />
                </form>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../resource/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../resource/assets/demo/chart-area-demo.js"></script>
        <script src="../resource/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../resource/js/datatables-simple-demo.js"></script>
    </body>
</html>
