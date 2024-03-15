<?php
include_once("database.php");
session_start();
if (isset($_POST["login"])) {
    $username = $_POST["usernames"];
    $password = $_POST["passwords"];
    if (cek_login($username, $password)) {
        // Jika login berhasil, atur session dan arahkan pengguna ke halaman yang sesuai
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        // Mengambil role pengguna dari database atau Anda bisa menetapkannya sesuai kebutuhan
        $_SESSION['role'] = "admin"; // Contoh pengaturan role, sesuaikan dengan aplikasi Anda
        if ($_SESSION['role'] == "admin") {
            header("location: admin.php");
            exit(); // Pastikan untuk keluar dari skrip setelah mengarahkan pengguna
        } else {
            header("location: datauser.php");
            exit(); // Pastikan untuk keluar dari skrip setelah mengarahkan pengguna
        }
    } else {
        // Jika login gagal, arahkan pengguna kembali ke halaman login dengan pesan kesalahan
        header("location: login.php?msg=gagal");
        exit(); // Pastikan untuk keluar dari skrip setelah mengarahkan pengguna
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stlye.css">
    <link rel="icon" href="bn777.png">

    <title>Website SMK Baknus666</title>
</head>

<body>
    <div class="haloow ">
        <div class="container">
            <div class="col-4 mx-auto">
                <body class="text-center">
                    <main class="form-signin">
                        <form method="post"> <!-- Perbaiki di sini, tambahkan method="post" -->
                            <br>
                            <img class="mt-4" src="bn777.png" alt="" width="100" height="80"><br><br>
                            <h1 class="h3 mt-3 fw-normal">Please Login Your Acount</h1>
                            <br>

                            <div class="form-floating mt-4">
                                <input type="text" class="form-control" id="username" placeholder="username" name="usernames">
                                <label for="floatingusername">Username</label>
                                <br><br>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="Password" placeholder="Password" name="passwords">
                                <label for="floatingPassword">Password</label>
                            </div><br>

                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button>
                            <div class="text-center">
                                <br>Belum Punya Akun? Silahkan <a href="daftar.php">Daftar</a>
                            </div>
                            <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
                        </form>
                    </main>
            </div>
        </div>
    </div>
</body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>