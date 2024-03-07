<?php include "boot.php";
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit(); // Terminate script execution after the redirect
}
 ?>
<body background="uu.jpg" style="background-size:cover;">
<table class="table">
  <thead class="table-dark">
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
  <div class="col-4">
  <div class="input-group mb-10 ">
    <form class="d-flex" role="search" action="" method="post" >
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search"> 
      <button class="btn btn-success" name="cari" type="submit"><i class="bi bi-search"></i></button>
    </form>
  </div>
  </div>
  </div>
  </nav>
  </thead>
  <thead class="table-dark">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nik</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Hapus</th>
        <th>Edit</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include "koneksi.php";
    $no = 0; // Inisialisasi nomor urut
    if(isset($_POST['cari'])) {
      $search = $_POST['search'];
      $query = "SELECT * FROM pasien WHERE nama LIKE '%$search%'";
    } else {
      $query = "SELECT * FROM pasien";
    }
    $result = $konek->query($query);
    if($result->num_rows > 0) {
      while($a = $result->fetch_assoc()) {
        $no++; // Increment nomor urut
  ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $a['nama']; ?></td>
        <td><?php echo $a['nik']; ?></td>
        <td><?php echo $a['alamat']; ?></td>
        <td><?php echo $a['tanggal_lahir']; ?></td>
        <td>
          <a href="delete.php?id=<?php echo $a['no']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini')">
            <button class="btn btn-danger text-light"><i class="bi bi-trash"></i></button>
          </a>
        </td>
        <td>
          <a href="edit.php?id=<?php echo $a['no']; ?>">
            <button class="btn btn-warning text-light"><i class="bi bi-pencil-fill"></i></button>
          </a>
        </td>
    </tr>
  <?php
      }
    } else {
      echo "<tr><td colspan='7'>Tidak ada data ditemukan</td></tr>";
    }
  ?>
  </tbody>
</table>
</body>
