<?php
    // Mengatasi error "Warning: Cannot modify header information"
    ob_start();

    include "koneksi.php";
    $sql = "SELECT * FROM tb_teman";
    $dataTeman = mysqli_query($con, $sql);

    session_start();
    if(!isset($_SESSION["username"])){
        header("Location:login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/style-hitam.css">

    <style>
        body{
            background-color: whitesmoke;
        }
        .banner{
            background: #a770ef;
            background: -webkit-linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
            background: linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
        }

        .image{
            overflow: hidden
        }

        .image img {
            transition: all 2s ease-in-out
        }

        .image:hover img {
            transform: scale(2, 2);
            cursor: pointer
        }

        a {
            text-decoration: none;
        }
        .login-page {
            width: 100%;
            height: 100vh;
            display: inline-block;
            display: flex;
            align-items: center;
        }
        .form-right i {
            font-size: 100px;
        }
    </style>
</head>
<body id="hitam">
    
    <!--<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top nav shadow p-2">
        <div class="container">
            <a class="navbar-brand fw-bold" id="logo" href="#">RANGGA<span class="text-warning"> DEV</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item aktif m-2">
                        <a class="nav-link text-dark" href="#">Beranda</a>
                    </li>

                    <li class="nav-item tidak-aktif m-2">
                        <a class="nav-link text-dark" href="#tentang-saya">Tentang Saya</a>
                    </li>

                    <li class="nav-item tidak-aktif m-2">
                        <a class="nav-link text-dark" href="#tabel">Tabel Teman</a>
                    </li>

                    <li class="nav-item tidak-aktif m-2">
                        <a class="nav-link text-dark" href="#kontak">Kontak</a>
                    </li>

                    <!-- Tersembunyi (Hidden)
                    <li class="m-4 ms-5">
                        <input type="hidden">
                    </li>

                    <li class="m-2 ms-2">
                        <input type="hidden">
                    </li>
                </ul>

                <a href="https://azharanggakusuma.github.io/" class="btn btn-brand btn-sm btn-primary ms-lg-5">Portofolio</a>
                <a href="logout.php" class="btn btn-brand btn-sm btn-danger ms-lg-2">Log Out</a>

                <div class="form-check form-switch ms-3">
                    <input onclick="gantiTema()" class="form-check form-check-input form-switch" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                </div>
            </div>
        </div>
    </nav>-->

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 shadow">
        <div class="container">
            <a class="navbar-brand fw-bold col-md-3 mb-2 mb-md-0" id="logo" href="#">RANGGA<span class="text-warning"> DEV</span></a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li class="aktif"><a href="#" class="nav-link px-2 link-dark">BERANDA</a></li>
                <li class="tidak-aktif"><a href="#tentang-saya" class="nav-link px-2 link-dark">TENTANG SAYA</a></li>
                <li class="tidak-aktif"><a href="#tabel" class="nav-link px-2 link-dark">TUGAS</a></li>
                <li class="tidak-aktif"><a href="#" class="nav-link px-2 link-dark">PORTOFOLIO</a></li>
                <li class="tidak-aktif"><a href="#kontak" class="nav-link px-2 link-dark">KONTAK</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a href="login.php" class="btn btn-brand btn-sm btn-primary ms-lg-5"><i class="bi bi-box-arrow-in-right"></i> Login &nbsp;</a>
                <a href="logout.php" class="btn btn-brand btn-sm btn-danger ms-lg-2"><i class="bi bi-box-arrow-in-left"></i> Logout</a>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="bg-primary bg-gradient text-white mb-5" style="height: 100vh;">
        <br><br><br><br><br><br><br><br><br><br><br>
        <div class="container px-4 text-center">
            <div class="fw-bolder">
                <?php
                    if(isset($_SESSION["username"])){
                        echo "<h1 class='title'>Hi, Selamat datang <span class='badge text-bg-warning rounded-pill text-capitalize'> " . $_SESSION["username"] . "<span></h1>";
                    }
                ?>
            </div>
            <?php
                date_default_timezone_set("Asia/jakarta");
            ?>
            <h1 class="fw-bold" id="jam"></h1>
            <p class="lead"><i class="fas fa-quote-left"></i> Never give up on the situation, Keep the spirit.</p>
            <a class="btn btn-light" href="#tentang-saya">&nbsp;Portofolio&nbsp;</a> &nbsp;
            <a class="btn btn-light" href="#" onclick="gantiTema()">Ganti Tema</a>
        </div>
    </header>

    <div class="container">
        <h1 class="text-center mt-5" id="tentang-saya">Tentang Saya</h1>
        <section class="mx-auto my-5" style="max-width: 19rem;">
            <div class="card border-0 shadow rounded-3 my-5 mt-2 mb-3">
                <div>
                    <img src="img/foto.jpg" class="img-fluid rounded-3" alt="Azharangga Kusuma">
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title fw-bold">Azharangga Kusuma</h4>
                    <h6 class="card-title">S1-Teknik Informatika</h6>
                    <h6 class="card-title">STMIK IKMI Cirebon</h6>
                    <hr>
                    <p><i class="fas fa-quote-left"></i> Never give up on the situation, Keep the spirit.</p>
                </div>
            </div>
        </section>

        <div class="container-fluid">
        <div class="px-lg-5">

        <!-- For demo purpose -->
        <div class="row py-5">
        <div class="col-lg-12 mx-auto">
            <div class="text-white p-5 shadow-sm rounded banner">
            <h1 class="display-4 fw-bold">Galeri Sertifikat</h1>
            <p class="lead">&nbsp; Pelatihan, Magang dan Kompetensi.</p>
            </div>
        </div>
        </div>
        <!-- End -->

        <div class="row">
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="image bg-white rounded shadow-sm"><img src="img/sertifikat/MTCNA.jpg" alt="" class="img-fluid card-img-top">
            <div class="p-4">
                <h5> <a href="#" class="text-dark">MTCNA</a></h5>
                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                    <span class="badge text-bg-danger rounded-pill">2019 - 2022</span>
                </div>
            </div>
            </div>
        </div>
        <!-- End -->

        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="image bg-white rounded shadow-sm"><img src="img/sertifikat/Juara-3.png" alt="" class="img-fluid card-img-top">
            <div class="p-4">
                <h5> <a href="#" class="text-dark">Juara 3</a></h5>
                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                    <span class="badge text-bg-primary rounded-pill">2021</span>
                </div>
            </div>
            </div>
        </div>
        <!-- End -->

        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="image bg-white rounded shadow-sm"><img src="img/sertifikat/Dasar Pemrograman Web.jpg" alt="" class="img-fluid card-img-top">
            <div class="p-4">
                <h5> <a href="#" class="text-dark">Pemrograman Web</a></h5>
                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                    <span class="badge text-bg-success rounded-pill">2022 - 2025</span>
                </div>
            </div>
            </div>
        </div>
        <!-- End -->

        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="image bg-white rounded shadow-sm"><img src="img/sertifikat/CNSS.jpg" alt="" class="img-fluid card-img-top">
            <div class="p-4">
                <h5> <a href="#" class="text-dark">ICSI</a></h5>
                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                    <span class="badge text-bg-warning rounded-pill">2020 - 2023</span>
                </div>
            </div>
            </div>
        </div>
        <!-- End -->

        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="image bg-white rounded shadow-sm"><img src="img/sertifikat/CCNAv7.jpg" alt="" class="img-fluid card-img-top">
            <div class="p-4">
                <h5> <a href="#" class="text-dark">CCNAv7</a></h5>
                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                    <span class="badge text-bg-primary rounded-pill">2022</span>
                </div>
            </div>
            </div>
        </div>
        <!-- End -->

        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="image bg-white rounded shadow-sm"><img src="img/sertifikat/NDG Linux Essentials.jpg" alt="" class="img-fluid card-img-top">
            <div class="p-4">
                <h5> <a href="#" class="text-dark">NDG Linux</a></h5>
                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                    <span class="badge text-bg-primary rounded-pill">2020</span>
                </div>
            </div>
            </div>
        </div>
        <!-- End -->

        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="image bg-white rounded shadow-sm"><img src="img/sertifikat/NDG Linux Unhatched.jpg" alt="" class="img-fluid card-img-top">
            <div class="p-4">
                <h5> <a href="#" class="text-dark">NDG Linux</a></h5>
                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                    <span class="badge text-bg-primary rounded-pill">2020</span>
                </div>
            </div>
            </div>
        </div>
        <!-- End -->

        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="image bg-white rounded shadow-sm"><img src="img/sertifikat/PCAP.jpg" alt="" class="img-fluid card-img-top">
            <div class="p-4">
                <h5> <a href="#" class="text-dark">PCAP</a></h5>
                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                    <span class="badge text-bg-primary rounded-pill">2022</span>
                </div>
            </div>
            </div>
        </div>
        <!-- End -->

        </div>
    </div>
    </div>

<br><br>

        <h1 class="text-center mt-5">Tabel Teman</h1>

        <?php
            if($_POST){
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];

                $tambah_data = "INSERT INTO tb_teman (nama_teman, alamat_teman) VALUES ('$nama', '$alamat')";

                mysqli_query($con, $tambah_data);
                header("location:halaman_admin.php");
            }
        ?>

        <form method="get" action="#tabel" id="tabel">
            <input type="text" class="form-control mt-5" placeholder="Silahkan cari data berdasarkan nama" name="cari">
        </form>

        <table class="table table-dark table-hover table-bordered table-responsive border-light mt-4">
            <thead>
                <tr class="text-center">
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>AKSI</th>
                </tr>
            </thead>

            <?php  
                // Pagination
                $banyakDataPerHal = 10;
                $banyakData = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tb_teman"));
                $banyakHal = ceil($banyakData / $banyakDataPerHal);
                if(isset($_GET['halaman'])){
                    $halamanAktif = $_GET['halaman'];
                }else{
                    $halamanAktif = 1;
                }

                $dataAwal = ($halamanAktif * $banyakDataPerHal) - $banyakDataPerHal;
                $dataTeman = mysqli_query($con, "SELECT * FROM tb_teman LIMIT $dataAwal, $banyakDataPerHal");

                $no = 1;
                if(isset($_GET['cari'])){
                    $dataTeman = mysqli_query($con, "SELECT * FROM tb_teman WHERE nama_teman LIKE '%" . $_GET['cari'] . "%'");
                    echo "<div class='mt-3 fw-bold alert alert-success text-dark'><i class='bi-info-circle-fill'></i></i><strong class='mx-2'>Info!</strong> Hasil pencarian : " . $_GET['cari'] . "</div>";
                }

                // File Handler
                $myfile = fopen("data_teman.csv", "w+") or die("Unable to open file!");
                fwrite($myfile, "No | Nama | Alamat\n");

                foreach($dataTeman as $data){
                    fwrite($myfile, "$no | " . $data['nama_teman'] . ' | ' . $data['alamat_teman'] . "\n");
            ?>

            <tbody>
                <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $data['nama_teman']; ?></td>
                    <td><?php echo $data['alamat_teman']; ?></td>
                    <td class="text-center">
                        <a href='edit.php?id_teman="<?php echo $data['id_teman']; ?>"' class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a> 
                        <a href='hapus.php?id_teman="<?php echo $data['id_teman']; ?>"' class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            </tbody>

            <?php
                }
                fclose($myfile);
                // Mengatasi error "Warning: Cannot modify header information"
                ob_end_flush();
            ?>
        </table>

        <!-- Pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php if($halamanAktif <= 1) { ?>
                <li class="page-item disabled">
                    <a href="?halaman=<?php echo $halamanAktif-1 ?>" class="page-link">Sebelumnya</a>
                </li>

                <?php } else{ ?>

                <li class="page-item">
                    <a href="?halaman=<?php echo $halamanAktif-1 ?>" class="page-link">Sebelumnya</a>
                </li>

                <?php } ?>

                <?php
                    for($i=1; $i <= $banyakHal; $i++){
                ?>

                <li class="page-item">
                    <a href="?halaman=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                </li>

                <?php } ?>

                <?php if($halamanAktif <= 1) { ?>

                <li class="page-item disabled">
                    <a href="?halaman=<?php echo $halamanAktif+1 ?>" class="page-link">Selanjutnya</a>
                </li>

                <?php } else { ?>

                <li class="page-item">
                    <a href="?halaman=<?php echo $halamanAktif+1 ?>" class="page-link">Selanjutnya</a>
                </li>     

                <?php } ?>
            </ul>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <i class="bi-exclamation-triangle-fill"></i> &nbsp;
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah kamu ingin menghapusnya?
                    </div>
                    <div class="modal-footer">
                        <a href='hapus.php?id_teman="<?php echo $data['id_teman']; ?>"' class="btn btn-danger">Hapus</a>
                        <a href="" class="btn btn-primary" data-bs-dismiss="modal">Batal</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="tambah.php" class="btn btn-dark mt-3 mb-5"><i class="bi bi-plus-square"></i> Tambah</a> &nbsp;
            <a href="data_teman.csv" class="btn btn-dark mt-3 mb-5"><i class="bi bi-download"></i> Unduh</a>
        </div>
    </div>

    </div>

    <footer class="bg-dark text-center text-white">
        <div class="container p-4 pb-0">
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="https://wa.me/+62895364527280" role="button" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="https://instagram.com/azharangga_kusuma" role="button" target="_blank"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="https://www.linkedin.com/in/azharangga-kusuma-9a30911a0" role="button" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="https://www.github.com/azharanggakusuma" role="button" target="_blank"><i class="fab fa-github"></i></a>
                <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="https://youtube.com/channel/UCnKjszzhKbvQ9zqbo9kKjpg" role="button" target="_blank"><i class="fab fa-youtube"></i></a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <?php echo date('Y'); ?> - <a class="text-white" style="text-decoration: none;" href="#">Azharangga Kusuma</a>
        </div>
    </footer>

    <script>
        window.onload = function () {
            jam();
        };

        function jam() {
            var e = document.getElementById("jam"),
                d = new Date(),
                h,
                m,
                s;
                h = d.getHours();
                m = set(d.getMinutes());
                s = set(d.getSeconds());
                e.innerHTML = h + ":" + m + ":" + s;

            setTimeout("jam()", 1000);
        }

        function set(e) {
            e = e < 10 ? "0" + e : e;
            return e;
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="script/main.js"></script>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</body>
</html>