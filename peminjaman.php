<?php
include 'cekindex.php';

?>
<!doctype html>
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

<div class="haloo ">
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

        <div class="col mt-5 mb">
            <div class="col col-sm-10">

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-4">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="admin.php">Barang</a>
                        </li>

                        </li>
                    </ul>
                    <a href="logout.php" class="btn btn-dark">LOGOUT</a>
                </div>
            </div>
            </nav>
            <figure class="text-center mt-3">
                <blockquote class="blockquote">
                    <h3>Data Peminjaman User Yang Dimasukan</h3>
                </blockquote>
                <figcaption class="blockquote-footer">
                    CRUD : Create, Read, Update, And Delete <cite title="Source Title"></cite>
                </figcaption>
            </figure>

            <a href="olahpinjam.php" type="button" class="btn btn-primary">Tambah</a><br><br>
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">No Identias</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Keperluan</th>
                        <th scope="col">Status</th>
                        <th scope="col">ID Login</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM Peminjaman";
                    $sql = mysqli_query($konek, $query);
                    $no = 1;
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <th scope="row">
                                <?php echo $no ?>
                            </th>
                            <td>
                                <?php echo $data['id']; ?>
                            </td>
                            <td>
                                <?php echo $data['tgl_pinjam']; ?>
                            </td>
                            <td>
                                <?php echo $data['tgl_kembali']; ?>
                            </td>
                            <td>
                                <?php echo $data['no_identitas']; ?>
                            </td>
                            <td>
                                <?php echo $data['kode_barang']; ?>
                            </td>
                            <td>
                                <?php echo $data['jumlah']; ?>
                            </td>
                            <td>
                                <?php echo $data['keperluan']; ?>
                            </td>
                            <td>
                                <?php echo $data['status']; ?>
                            </td>
                            <td>
                                <?php echo $data['id_login']; ?>
                            </td>
                            <td>
                                <a href="delete.php?id=<?php echo $data['id']; ?>">
                                    <button type="button" class="btn btn-danger">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </a>
                            </td>


                        </tr>
                    <?php
                        $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

    </tbody>
    </table>
</div>
   

    <!-- Optional JavaScript; choose one of the two! -->

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