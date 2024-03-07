<?php include "boot.php"; 
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit(); // Terminate script execution after the redirect
}
?>
<body background="uu.jpg" style="background-size:cover;">
  <head>
  <div class="text-center">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <body>
    <h1>INPUT DATA PASIEN</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html> 
 
    <div class="container mb-3 col-3">
    <form action="rumah.php" method="post">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">nik</label>
    <input type="text" name="nik" class="form-control" id="exampleInputPassword1" required>
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">alamat</label>
    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" required>
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">tanggal lahir</label>
    <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputPassword1" required>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
<button type="reset" class="btn btn-primary">Reset</button>
<p id="warning" style="color: red; display: none;">Data tidak boleh kosong.</p>

<script>
    document.querySelector("form").addEventListener("submit", function(event) {
        const inputs = document.querySelectorAll("input");
        let isEmpty = false;
        inputs.forEach(function(input) {
            if (input.value.trim() === "") {
                isEmpty = true;
            }
        });
        if (isEmpty) {
            event.preventDefault();
            document.getElementById("warning").style.display = "block";
        } else {
            document.getElementById("warning").style.display = "none";
        }
    });
</script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</form>