<?php include "boot.php";
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit(); // Terminate script execution after the redirect
}
?>
<body background="uu.jpg" style="background-size:cover;">
<form action=""method="get">

<div class="row g-3 align-items-center mt-2">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label"></label>
  </div>
  <div class="col-auto">
    <input type="date" name="awal" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <input type="date" name="akhir" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
  <button type="submit" name="cari"  class="btn btn-primary"><i class="bi bi-search"></i></button>
  </div>
  <div class="col d-grid gap-2 md-flex justify-content-md-end me-2">
  <button class="btn btn-dark" onclick="printDiv('print')" type="submit"><i class="bi bi-printer"></i>
    </div>
    </form>
</div>
</div>  
<fieldset id="print">
<table class="table class text-center bg-info-emphasis mt-2 mt-2">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nik</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tanggal Lahir</th>
      
    </tr>
</thead>
<!-- cari -->
<?php
include "koneksi.php";

if (isset($_GET['cari'])) {
    // If the form is submitted
    $awal = isset($_GET['awal']) ? $_GET['awal'] : '';
    $akhir = isset($_GET['akhir']) ? $_GET['akhir'] : '';

    $no = 0; // Initialize the counter

    if ($awal == "") {
        $tampil = $konek->query("SELECT * FROM pasien");
        while ($a = $tampil->fetch_array()) {
            $no++;
?>
            <tbody class="table">
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo htmlspecialchars($a['nama']); ?></td>
                    <td><?php echo htmlspecialchars($a['nik']); ?></td>
                    <td><?php echo htmlspecialchars($a['alamat']); ?></td>
                    <td><?php echo htmlspecialchars($a['tanggal_lahir']); ?></td>
                </tr>
            </tbody>
<?php
        }
    } else {
        $tampil = $konek->query("SELECT * FROM pasien WHERE tanggal_lahir BETWEEN '$awal' AND '$akhir'");
        while ($a = $tampil->fetch_array()) {
            $no++;
?>
            <tbody class="table">
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo htmlspecialchars($a['nama']); ?></td>
                    <td><?php echo htmlspecialchars($a['nik']); ?></td>
                    <td><?php echo htmlspecialchars($a['alamat']); ?></td>
                    <td><?php echo htmlspecialchars($a['tanggal_lahir']); ?></td>
                </tr>
            </tbody>
<?php
        }
    }
}
?>
<!-- tutup cari  -->

    
    <script type="text/javascript">
    function printDiv(el) {
        var a= document.body.innerHTML;
        var b= document.getElementById(el).innerHTML;

        document.body.innerHTML=b;
        window.print();
        document.body.innerHTML=a;
    }

</script>