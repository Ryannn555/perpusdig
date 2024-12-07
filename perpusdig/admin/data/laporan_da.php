<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

        <div class="container">
            <div class="row">
                <div class="col text-center mt-4">
                    <h3>LAPORAN DATA ANGGOTA</h3>
                    <h3>APLIKASI PERPUSTAKAAN DIGITAL</h3>
                    <span>Data ini merupakan data keseluruhan member perpustakaan</span>
                </div>
            </div>
            <div class="row">
            <table class="table mt-2">
                <thead class="table table-warning">
                    <tr>
                        <th scope="col">ID User</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nis</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Level</th>
                    </tr>
                </thead>
            <?php
                  include '../../koneksi/koneksi.php';

                  $data = mysqli_query($koneksi, "SELECT * FROM user");
                  while ($d = mysqli_fetch_array($data)) {

            ?>
            <tbody>
            <tr>
                <th scope="row"><?php echo $d['IDuser']; ?></th>
                <td><?php echo $d['username']; ?></td>
                <td><?php echo $d['password']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['nis']; ?></td>
                <td><?php echo $d['namalengkap']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['level']; ?></td>
            </tr>
            </tbody>
                <?php
                }
                ?>
                </table>
            </div>
            <div class="row">
                <div class="col">
                    <p style="line-height: 1rem;">Menegetahui:</p>
                    <p class="">Kepala Perpustakaan Sekolah</p>
                    <p class="" style="margin-top: 4rem;"><b>ZAKIRIAN</b></p>
                </div>
            </div>
            <div class="row">
                <a href="../laporan.php">Kembali</a>
            </div>
        </div>
        <script>
            window.print();
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>