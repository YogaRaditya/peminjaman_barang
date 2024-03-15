<?php
include_once("database.php");

if (isset($_POST["submit"])) {
    if (tambah_peminjaman($_POST)) {
        echo "<script>
            document.location.href='peminjaman.php'
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
<!DOCTYPE html>
<?php
include 'cekindex.php';
?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
            <li><a href="datauser.php" class="nav-link link-blue">Data User</a></li>
            <li><a href="peminjaman.php" class="nav-link link-blue">Data Peminjaman</a></li>
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

    <div class="haloow ">
        <div class="row">
            <div class="col-3">
                <div class="d-flex mt-0 flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0  text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                        <span class="fs-6">SIDEBAR</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column ">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#table"></use>
                                </svg>
                                Orders
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#grid"></use>
                                </svg>
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#people-circle"></use>
                                </svg>
                                Customers
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                </div>
            </div>

            <div class="col mt-5 mb-4">
                <div class="col col-sm-10">

                    <figure class="text-center mt-3">
                        <blockquote class="blockquote"><br>
                            <h3>Data User Peminjam Yang Dimasukan</h3>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            CRUD : Create, Read, Update, And Delete <cite title="Source Title"></cite>
                        </figcaption>
                    </figure>

                    <!-- content -->
                    <div class="container mt-5">
                        <form action="" method="post">


                            <div class="mb-3">
                                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
                            </div>
                            <div class="mb-3">
                                <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">
                            </div>
                            <div class="mb-3">
                                <label for="no_identitas" class="form-label">No Identitas</label>
                                <input type="number" class="form-control" id="no_identitas" name="no_identitas">
                            </div>
                            <div class="mb-3">
                                <label for="kode_barang" class="form-label">kode Barang</label>
                                <input type="text" class="form-control" id="kode_barang" name="kode_barang">
                            </div>
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah">
                            </div>

                            <div class="mb-3">
                                <label for="keperluan" class="form-label">Keperluan</label>
                                <input type="text" class="form-control" id="keperluan" name="keperluan">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" class="form-control" id="status" name="status">
                            </div>

                            <div class="mb-3">
                                <label for="id_login" class="form-label">ID Login</label>
                                <input type="text" class="form-control" id="id_login" name="id_login">
                            </div>

                            <div class="mb-3 row">
                                <input type="hidden" name="edit_id" value="<?php echo isset($edit_data['id']) ? $edit_data['id'] : ''; ?>">
                                <button type='submit' name="submit" class='btn btn-primary'>
                                    <?php echo isset($edit_data['id']) ? 'Edit Data' : 'Tambah Data'; ?>
                                </button>
                        </form>
                    </div>
                </div>
            </div>

            </tbody>
            </table>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
        -->
</body>

</html>