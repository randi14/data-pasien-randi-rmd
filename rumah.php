<?php
include "koneksi.php";

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'];

$simpan = $konek->query("insert into pasien (nama, nik, alamat, tanggal_lahir) values ('$nama', '$nik', '$alamat', '$tanggal_lahir')");
?>

<script>
    alert("Data berhasil ditambahkan");
    document.location.href = 'input.php';
</script>
