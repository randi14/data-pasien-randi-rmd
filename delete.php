<?php
include "koneksi.php";
$id = $_GET['id'];
$delete = $konek->query("delete from pasien where no='$id'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Pasien</title>
</head>

<body>
    <?php
    if ($delete) {
    ?>
        <script>
            alert("Berhasil dihapus");
            document.location.href = 'tampil.php';
        </script>
    <?php
    }
    ?>
</body>

</html>
