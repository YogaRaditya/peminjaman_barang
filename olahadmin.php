<?php
include_once("database.php");

if (isset($_POST["submit"])) {
    if (tambah_barang($_POST)) {
        echo "<script>
            document.location.href='admin.php'
        </script>";
    }
}
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $edit_data = get_barang_by_id($edit_id);
} else {
    $edit_data = null;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stlye.css">
    <link rel="icon" href="bn777.png">

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
            <li><a href="datauser.php" class="nav-link link-blue">Data Barang</a></li>
            <li><a href="peminjaman.php" class="nav-link link-blue">Data Peminjaman</a></li>
            <li><a href="#" class="nav-link link-blue">Kontak</a></li>
        </ul>

        <div class="col-2">
            <button type="button" class="btn btn-outline-primary me-2 ">Login</button>
            <button type="button" class="btn btn-primary">Sign-up</button>
        </div>

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

    <div class="haloow">
        <figure class="text-center">
            <blockquote class="blockquote"><br>
                <h3>Data Barang Yang Ditambahkan</h3>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD : Create, Read, Update, And Delete <cite title="Source Title"></cite>
            </figcaption>
        </figure>

        <!-- content -->
        <div class="container">
            <form action="" method="post">

                <div class="mb-3">
                    <label for="kode_brg" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_brg" name="kode_brg">
                </div>
                <div class="mb-3">
                    <label for="nama_brg" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_brg" name="nama_brg">
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori">
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk">
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah">
                </div>

                <div class="mb-3 row">
                    <input type="hidden" name="edit_id" value="<?php echo isset($edit_data['id']) ? $edit_data['id'] : ''; ?>">
                    <button type='submit' name="submit" class='btn btn-primary'>
                        <?php echo isset($edit_data['id']) ? 'Edit Data' : 'Tambah Data'; ?>
                    </button>
            </form>
        </div>
        </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>