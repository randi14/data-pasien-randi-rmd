<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit(); // Terminate script execution after the redirect
}
include "boot.php";
include "cek.php";

?>
<!-- heder -->
<nav class="navbar navbar-expand-lg bg-light">
  <img src="tt.png" alt="" width="100" height="100"></a>
  <div class="container-fluid">
    <h3> WEB INPUT DATA PASIEN</h3>
    </marquee></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


  </div>
  </div>
</nav>



</div>
<!-- tutup header -->

<div class="row">

  <div class="col col-2 mt-2">

    <ul class="list-group">
      <li class="list-group-item active bg-dark" aria-current="true">
        <h5>
          <div class="badge bg-Success text-wrap" style="width: 11rem;">
            <h5>Menu</h5>
      </li>
      <a href="beranda.php" target="konten">
        <li class="list-group-item">
          <h5>
            <div class="badge bg-success text-wrap" style="width: 11rem;">
              <i class="bi bi-houses"></i>Beranda
        </li>
      </a>
      <a href="input.php" target="konten">
        <li class="list-group-item">
          <h5>
            <div class="badge bg-success text-wrap" style="width: 11rem;">
              <i class="bi bi-file-earmark-diff"></i> Input Data Pasien
        </li>
      </a>
      <a href="tampil.php" target="konten">
        <li class="list-group-item">
          <h5>
            <div class="badge bg-success text-wrap" style="width: 11rem;">
              <i class="bi bi-file-earmark-check"></i>Lihat Data Pasien
        </li>
      </a>
      <a href="rekap.php" target="konten">
        <li class="list-group-item">
          <h5>
            <div class="badge bg-success text-wrap" style="width: 11rem;">
              <i class="bi bi-printer"></i>Rekap
        </li>
      </a>
      <a href="index.php" target="">
        <li class="list-group-item">
          <h5>
          <div class="badge bg-success text-wrap" style="width: 11rem;">
    <i class="bi bi-box-arrow-left text-white"></i> <a href="logout.php" class="text-white" style="text-decoration: none;">logout</a>
</div>

        </li>
      </a>

      <body style=" background-image:url('uu.jpg'); background-size:cover;">


    </ul>

  </div>

  <!-- tutup side -->

  <!-- konten -->
  <div class="col bg-Dark mt-2">
    <!-- <img src="icon.png" alt="" width="100%"> -->
    <iframe src="beranda.php" name="konten" frameborder="0" width="100%" height="800"></iframe>
  </div>
  <!-- tutup konten -->
</div>