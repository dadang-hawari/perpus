<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/unm-logo1.svg">
    <title>DAFTAR</title>
    <link rel="stylesheet" href="css/style_daftar.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/lihatpw.js"></script>
</head>

<body>
    <div class="py-4 container">
        <form action="" method="POST" >
            <fieldset class="border">
                <legend class=" float-none w-auto h6">PERPUSTAKAAN UNM</legend>
                <h2 class="text-center" style="color: white; font-weight: 400;">
                    <p></p>
                </h2>
                <div class="row justify-content-center">
                    <h4 class="text-center me-3 fw-bold"><u>BUAT AKUN ANGGOTA PERPUSTAKAAN</u></h4>
                    <label for="nim">Nomor Induk Mahasiswa</label><br><br>
                    <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*)\./g, '$1');">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
                    <label for="no_hp">Nomor Hp</label>
                    <input type="text" id="no_hp" name="no_hp" placeholder="Masukkan Nomor Hp" required oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*)\./g, '$1');">
                    <label for="sandi">Sandi</label>
                    <input type="password" id="sandi" name="sandi" placeholder="Masukkan Sandi" required>
                    <label style="margin-right: 55%;">
                    <input type="checkbox" onclick="lihatsandi()">Lihat Sandi
                    </label>   
                    <div class="text-center">
                        <button name="submit" class="btnku fw-bold">Daftar</button>
                        <?php
                        include 'koneksi.php';
                        if (isset($_POST['submit'])) {
                            $nim = $_POST['nim'];
                            $nama = $_POST['nama'];
                            $email = $_POST['email'];
                            $no_hp = $_POST['no_hp'];
                            $password = $_POST['sandi'];
                            $cek = mysqli_query($koneksi, "select * from anggota where nim = '".$_POST['nim']."'");
                            $count = mysqli_num_rows($cek);
                            if (!$count) {
                            //input data ke table
                                $sql = "insert into anggota (no, nim, nama, email, no_hp, password) values (NULL,'$nim','$nama','$email', '$no_hp','$password')";
                                $run = mysqli_query($koneksi, $sql);
                                if ($sql)
                                header('location:terdaftar.php');
                            }else
                                echo "<br><span style='color:red'>NIM yang Anda Masukkan Telah Terdaftar</span><br>
                                <a style='color:black;' href='login.php'>Klik Ini untuk Kembali ke Menu Masuk</a>";
                        }
                    ?>
                        <br><br>
                    </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

</body>

</html>