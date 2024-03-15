<?php
include_once("database.php");
$sql = editData("barang", $_GET['id']);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Website SMK Baknus666</title>
</head>

<body>
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-between bg-dark py-3 shadow">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 text-light text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                <img class="me-4" src="bn777.png" alt="" width="50">
                <span class="fs-6 text-light me-4">SMK <br>BAKTI NUSANTARA 666</span>
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>

        <ul class="nav col-4 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="home.php" class="nav-link link-blue">Home</a></li>
            <li><a href="barang.php" class="nav-link link-blue">Peminjaman</a></li>
            <li><a href="datauser.php" class="nav-link link-blue">Data User</a></li>
            <li><a href="peminjaman.php" class="nav-link link-blue">Data peminjaman</a></li>
            <li><a href="#" class="nav-link link-blue">Kontak</a></li>
        </ul>


        <a href="#" class="col-md-2 me-4 text-end d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small shadow-lg" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
            </li>
            <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
        </ul>
    </header>

    
    <a class="navbar-brand" href="Home" style="padding-start: 100px;"><strong>KELOLA DATA
                        BARANG</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


        <figure class="text-center mt-5">
            <blockquote class="blockquote">
                <p>Silahkan Ubah Data Barang</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD : Create, Read, Update, And Delete <cite title="Source Title"></cite>
            </figcaption>
        </figure>

        <div class="container mt-5">
            <form action="proses_update.php" method="post">
                <?php
            while ($data = mysqli_fetch_array($sql)) {
                ?>
                  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <div class="mb-3">
                    <label for="kode_brg" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_brg" name="kode_brg"  value="<?php echo $data['kode_brg']; ?>">
                </div>
                <div class="mb-3">
                    <label for="nama_brg" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_brg" name="nama_brg"  value="<?php echo $data['nama_brg']; ?>">
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $data['kategori']; ?>">
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk"  value="<?php echo $data['merk']; ?>">
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah"  value="<?php echo $data['jumlah']; ?>">
                </div>
                

                <div class="mb-3 row">
                <button type='submit' name="submit" class='btn btn-primary'>Simpan Data</button>
            </form>
            <?php } ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

</html>

</div>

</div>
</div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>
