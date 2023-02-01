<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/style-login.css">
</head>
<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-3" style="max-height: 36rem;">
                    <div class="card-body p-4 p-sm-5">
                        <div class="text-center">
                            <img class="mb-3 rounded-3" src="img/logo.png" alt="" width="50" height="45">
                        </div>
                        <h1 class="card-title text-center mb-5 fw-light fw-bold">Silahkan Log In</h1>
                        <form action="cek_login.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username" id="floatingInput username" placeholder="Username" required>
                                <label for="floatingInput">Username</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" id="floatingPassword password" placeholder="Password" pattern='.{6,}' required>
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="form-label-group mb-3">
                                <select class="form-select" name="level" style="box-shadow: none;">
                                    <option style="display: none;">Login Sebagai</option>
                                    <option value="admin">admin</option>
                                    <option value="user">user</option>
                                </select>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
                                <a href="https://wa.me/+62895364527280?text=Reset%20Password%20atas%20nama%20%3A%20%0APassword%20Baru%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3A%20" class="text-decoration-none float-end" target="_blank">Forgot Password</a>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit"><i class="bi bi-box-arrow-right"></i> Log in</button>
                            </div>

                            <hr class="my-4">
                            <div class="d-grid">
                                <span class="text-center">Belum punya akun? <a href="register.php" class="text-decoration-none">Register</a></span>
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