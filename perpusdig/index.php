<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
    <div class="content">
        <div class="card" style="margin-top: 14rem;">
            <div class="row">
                <div class="col m-3">
                <h2>Silahkan Login Untuk Melanjutkan</h2>
                <?php
                  if(isset($_GET['pesan'])) {
                    if($_GET['pesan'] == "gagal") {
                    echo"<div class='alert alert-danger'>Username atau Password Anda Salah</div>";
                    }
                  }
                ?>
                    <form action="aksi/cek_login.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required  id="exampleInputPassword1">
                    </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <p class="mt-3">Saya belum memiliki akun. Buat <a href="registrasi.php" class="btn btn-warning">Disini</a></p>
                    </div>
                    <div class="col">
                        <img src="assets/img/login.jpg" width="400">
                </div>
            </div>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>