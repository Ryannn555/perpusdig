<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
        <div class="container">
            <div class="card" style="margin-top: 3rem;">
                <div class="row m-4">
                    <div class="col-sm-7">
                        <h3>From Edit Buku</h3>
                        <?php
                            include '../../koneksi/koneksi.php';
                            $id = $_GET['idbuku'];
                            $data = mysqli_query($koneksi,"SELECT * from buku where IDbuku='$id'");
                            while($d = mysqli_fetch_array($data)) {
                        ?>
                        <form action="e_buku.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Judul</label>
                                <input type="text" name="judul" value="<?php echo $d['judul']?>" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Penulis</label>
                                <input type="text" name="penulis" value="<?php echo $d['penulis']?>" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Penerbit</label>
                                        <input type="text" name="penerbit" value="<?php echo $d['penerbit']?>" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                                        <input type="text" name="tahunterbit" value="<?php echo $d['tahunterbit']?>" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Upload Sampul <span class="text-danger">*</span></label>
                                    <input type="file" name="foto" class="form-control" id="formFileMultiple" multiple>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Perbaharui</button>
                            <a href="../buku.php" class="btn btn-danger m-1">Kembali</a>
                        </form>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>