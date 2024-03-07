<?php
include "koneksi.php";
include "boot.php";
$id = $_GET['id'];
$tampil = $konek->query("select * from pasien where no='$id'");
$b = $tampil->fetch_array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Add your stylesheet or Bootstrap CDN link here -->
</head>
<body background="uu.jpg" style="background-size: cover;">
    <div class="container mt-2 text-center">
        <div class="row justify-content-center">
            <div class="col-4">
                <form action="" method="post">
                    <h3></h3>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?php echo $b['nama']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">nik</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nik" value="<?php echo $b['nik']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">alamat</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" value="<?php echo $b['alamat']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">tanggal lahir</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal_lahir" value="<?php echo $b['tanggal_lahir']; ?>">
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary" name="update">Simpan</button>
                </form>
            </div>
        </div>

        <!-- Bagian tampil -->
        <br>
        <!-- <iframe src="tampil.php" frameborder="0" width="700" height="500"></iframe> -->
        <!-- Tutup tampil -->
    </div>

    <?php
    if (isset($_POST['update'])) {
        $update = $konek->query("update pasien set nama='$_POST[nama]',nik='$_POST[nik]',alamat='$_POST[alamat]',tanggal_lahir='$_POST[tanggal_lahir]' where no='$id'");
    ?>
        <script>
            document.location.href = 'tampil.php';
        </script>
    <?php
    }
    ?>
</body>
</html>
