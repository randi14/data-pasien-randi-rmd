<?php
include "boot.php";
?>
<div class="text-center">
    <body background="uu.jpg" style="background-size: cover;" width="400" height="500">
    <?php
    session_start();
    ?>
    <center>
        <h1>SELAMAT DATANG DI APLIKASI INPUT DATA PASIEN</h1>
    </center>
    <img src="tt.png" alt="" width="100" height="100">
    <div class="container col-4 mt-5">
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username:</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                <?php if(isset($_SESSION['login_error']) && $_SESSION['login_error'] != ''): ?>
                    <div class="text-danger"><?php echo $_SESSION['login_error']; ?></div>
                <?php endif; ?>
            </div>
            <button type="submit" name="Login" class="btn btn-primary">Login</button>
        </form>
    </div>

    <?php
    include "koneksi.php";
    if (isset($_POST['Login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        // Validasi data tidak boleh kosong
        if(empty($username) || empty($password)) {
            $_SESSION['login_error'] = "Username dan password harus diisi.";
            header("Location: index.php");
            exit();
        }

        $kueri   = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $aman    = $konek->query($kueri);
        $cek     = $aman->num_rows;
        $tampil  = $konek->query("SELECT * FROM admin WHERE username = '$username'");
        $level   = $tampil->fetch_array();

        if ($cek > 0 ){
            if($level['level'] == 'admin'){
                $_SESSION['username'] = $username;
                ?>
                <script type="text/javascript">
                    document.location='dash.php';
                </script>
                <?php
            } elseif ($level['level'] == 'user') {
                $_SESSION['username'] = $username;
                ?>
                <script type ="text/javascript">
                    document.location='input.php';
                </script>
                <?php
            }
        } else {
            echo "PASSWORD YANG ANDA MASUKAN SALAH";
        }
    }
    ?>
</body>
