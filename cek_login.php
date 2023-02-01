<?php
    include "koneksi.php";

    $pass = md5($_POST['password']);
    $username = mysqli_escape_string($con, $_POST['username']);
    $password = mysqli_escape_string($con, $pass);
    $level = mysqli_escape_string($con, $_POST['level']);

    $cek_user = mysqli_query($con, "SELECT * FROM user WHERE username = '$username' AND level = '$level'");
    $user_valid = mysqli_fetch_array($cek_user);

    if($user_valid){
        if($password == $user_valid['password']){
            session_start();
            $_SESSION['username'] = $user_valid['username'];
            $_SESSION['nama'] = $user_valid['nama'];
            $_SESSION['level'] = $user_valid['level'];

            if($level == "admin"){
                header('location:halaman_admin.php');
            }else if($level == "user"){
                header('location:index.php');
            }
        }else{
            echo "<script>alert('Password yang kamu masukkan salah.'); document.location='login.php';</script>";
        }
    }else{
        echo "<script>alert('Username yang kamu masukkan salah.'); document.location='login.php';</script>";
    }
?>