<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

<div class="container">
    <div class="content">
        <div class="card" style="margin-top: 1rem;">
            <div class="row">
                <div class="col-sm-8 m-3">
                <h3>Silahkan Masukkan Data Calon Petugas!</h3>
                    <form action="t_ptgs.php" method="post">
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">NIS</label>
                        <input type="text" name="nis" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" name="namalengkap" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                        <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required  id="exampleInputPassword1">
                    </div>
                     <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Level</label>
                            <select class="form-select" name="level" aria-label="Default select example">
                                <option selected>-</option>
                                <option value="peminjam">Pengguna</option>
                                <option value="petugas">Petugas</option>
                                <option value="admin">Admin</option>
                             </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    <p class="mt-1">Saya sudah memiliki akun. Login <a href="index.php" class="btn btn-warning">Disini</a></p>
                    </div>
                    <div class="col">
                        <img src="assets/img/login.jpg" width="410" alt="">
                    </div>
                </div>
            </div>
        </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>