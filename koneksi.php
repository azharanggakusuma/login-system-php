<?php
$hostname = "localhost";
$database = "teman";
$username = "root";
$password = "";
$con = mysqli_connect($hostname, $username, $password, $database);

if (!$con) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
?> 