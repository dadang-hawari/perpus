<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/unm-logo1.svg">
    <title>PERPUSTAKAAN UNM</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.js"></script>
</head>

<body>
    <div class="py-4 container">
        <form action="" method="post">
            <fieldset class="border">
                <legend class="float-none w-auto h6">PERPUSTAKAAN UNM</legend>
                <h2 class="text-center" style="color: black; font-weight: 400;">
                    <p>SELAMAT DATANG DI PUSAT PEMINJAMAN BUKU UNM</p>
                </h2>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="assets/img/unm-logo1.png" alt="" class="img-small">
                    </div>
                    <div class="col-md-5">
                        <br>
                        <h4 class="text-center me-3 fw-bold"><u>SILAHKAN MASUK TERLEBIH DAHULU</u></h4>
                        <label for="nim">Nomor Induk Mahasiswa (NIM)</label>
                        <input type="text" id="nim" name="nim"  required oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*)\./g, '$1');">
                        <label for="sandi">Sandi</label>
                        <input type="password" id="sandi" name="sandi">
                        <br><br>
                        <div class="text-center">
                            <button name="masuk" class="btnku fw-bold">Masuk</button><br>
                            atau<br>
                            <a href="daftar.php" class="buat-akun fw-bold">Buat Akun</a>


                            <?php
                            if (isset($_POST['masuk'])) {
                                include 'koneksi.php';
                                $cek = mysqli_query($koneksi, "select * from anggota where nim = '" . $_POST['nim'] . "' and password = '" . $_POST['sandi']."'");
                                $cekdaftar = mysqli_query($koneksi, "select * from anggota where nim = '" . $_POST['nim'] . "' or password = '" . $_POST['sandi']."'");
                                $baris = mysqli_num_rows($cek);
                                $data = mysqli_fetch_array($cek);
                                $baris_daftar = mysqli_num_rows($cekdaftar);

                                    
                                if($baris_daftar>0){
                                    if ($baris>0) {
                                        session_start();
                                        $_SESSION['nama'] = $data['nama'];
                                        header('location:index.php');
                                    } else{
                                        echo "<br><span style='color:red'>Nim atau Sandi yang Anda Masukkan salah</span>";
                                    }
                                }else{
                                    echo "<br><span style='color:red'>NIM yang Anda Masukkan Belum Terdaftar</span>";
                                  
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

</div>
</body>

</html>