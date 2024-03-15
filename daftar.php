<?php
include 'cekindex.php';

$message = '';

if (isset($_POST['daftar'])) {
    $no_identitas = mysqli_real_escape_string($konek, $_POST['no_identitas']);
    $nama = mysqli_real_escape_string($konek, $_POST['nama']);
    $status = mysqli_real_escape_string($konek, $_POST['status']);
    $username = mysqli_real_escape_string($konek, $_POST['username']);
    $password = mysqli_real_escape_string($konek, $_POST['password']);
    $pass = password_hash($password, PASSWORD_DEFAULT); // Hash password
    $role = mysqli_real_escape_string($konek, $_POST['role']);

    $konek = mysqli_connect("localhost", "root", "", "stsyoga");
    if (!$konek) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "INSERT INTO user (no_identitas, nama, status, username, password, role)
              VALUES ('$no_identitas','$nama','$status', '$username', '$pass', '$role')";

    $hasil = mysqli_query($konek, $query);

    if ($hasil) {
        $message = 'Registration successful. Redirecting to login page...';
        header("refresh:3;url=login.php"); // Redirect after 3 seconds
        exit(); // Stop further execution
    } else {
        $message = "Error: " . $query . "<br>" . mysqli_error($konek);
    }

    mysqli_close($konek);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        <div class="container ">

            <figure class="text-center">
                <blockquote class="blockquote"><br>
                    <h3>DAFTAR DATA USER</h3>
                </blockquote>
                <figcaption class="blockquote-footer">
                    CRUD : Create, Read, Update, And Delete <cite title="Source Title"></cite>
                </figcaption>
            </figure>

            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <label for="no_identitas" class="form-label">No Identitas</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="no_identitas" name="no_identitas" required placeholder="Tambahkan No Identitas" aria-describedby="basic-addon3">
                    </div>

                    <label for="nama" class="form-label">Nama</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" required placeholder="Tambahkan Nama" aria-describedby="basic-addon3">
                    </div>

                    <label for="status" class="form-label">Status</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="status" name="status" required placeholder="Tambahkan Status" aria-describedby="basic-addon3">
                    </div>

                    <label for="username" class="form-label">Username</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="username" name="username" required placeholder="Tambahkan Username" aria-describedby="basic-addon3">
                    </div>

                    <label for="password" class="form-label">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Tambahkan Password" aria-describedby="basic-addon3">
                    </div>

                    <label for="role" class="form-label">Role</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="role" name="role" required placeholder="Tambahkan Role" aria-describedby="basic-addon3">
                    </div><br>

                    <div class="row mb-3">
                        <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
                    </div>
                </form>
                <div class="row mb-3">
                    <?php echo $message; ?> <!-- Display the success or error message -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>