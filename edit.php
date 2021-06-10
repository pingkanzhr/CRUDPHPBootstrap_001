<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                Data Mahasiswa
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                </div>
                </div>
        </div>
    </nav>
    <?php
    include 'config.php';

    $id = $_GET['id'];

    $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa where id= '$id'");
    while ($data = mysqli_fetch_assoc($mahasiswa)){
    ?>
        <div class="container mt-5">
            <p><a href="index.php">Home</a> / Detail Mahasiswa / <?php echo $data['nama'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Profil Mahasiswa</p>
                </div>
                <div class="card-body fw-bold">
                    <form action="update.php" method="post">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Mahasiswa" name="nama" value="<?php echo $data['nama']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="NIM" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" placeholder="Masukkan Nim Mahasiswa" name="nim" value="<?php echo $data['nim']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="Alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="Alamat" placeholder="Masukkan Alamat Mahasiswa" name="alamat" value="<?php echo $data['alamat']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" value="SIMPAN">Update</button>                        
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>  
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>