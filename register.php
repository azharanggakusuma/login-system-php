<?php
    include "koneksi.php";

    if($_POST){
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $email = $_POST['email'];
        $level = $_POST['level'];

        $register = "INSERT INTO user (nama, username, password, email, level) VALUES ('$nama', '$username', '$password', '$email', '$level')";

        mysqli_query($con, $register);
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/style-login.css">
</head>
<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-4" style="max-height: 48rem;">
                    <div class="card-body p-4 p-sm-5">
                        <div class="text-center">
                            <img class="mb-3 rounded-3" src="img/logo.png" alt="" width="50" height="45">
                        </div>
                        <h1 class="card-title text-center mb-5 fw-light fw-bold">Silahkan Daftar</h1>
                        <form action="" method='POST'>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nama" id="floatingInput nama" placeholder="Nama Lengkap" required>
                                <label for="floatingInput">Nama Lengkap</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="floatingInput email" placeholder="Email" required>
                                <label for="floatingInput">Email</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username" id="floatingInput username" placeholder="Username" required>
                                <label for="floatingInput">Buat Username</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" id="floatingPassword password" placeholder="Password" pattern='.{6,}' required>
                                <label for="floatingPassword">Buat Password</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control text-danger" name="level" id="floatingInput level" value="user" required readonly>
                                <label for="floatingInput">Kamu Daftar Sebagai</label>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">Syarat dan Ketentuan</label>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name='daftar'><i class="bi bi-box-arrow-right"></i> Daftar</button>
                            </div>

                            <hr class="my-4">
                            <div class="d-grid mb-2">
                                <span class="text-center">Sudah punya akun? <a href="login.php" class="text-decoration-none">Log In</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>