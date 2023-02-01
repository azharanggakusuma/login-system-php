<?php
    include "koneksi.php";

    if($_POST){
        $nama_lengkap = $_POST['nama_lengkap'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];

        $tambah_data = "INSERT INTO tb_kontak (nama_lengkap, email, pesan) VALUES ('$nama_lengkap', '$email', '$pesan')";

        mysqli_query($con, $tambah_data);
        header("location:index.php");
    }
?>