<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg" href="assets/img/unm-logo1.svg">
  <title>Perpustakaan UNM</title>
  <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/menu_utama.css">
</head>

<body>
  <header>
    <nav>
      <label for="check" class="btn">
        <i class="icon fas fa-bars"></i>
      </label>
      <span class="logo">PERPUS UNM</span>
      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">Pinjaman</a></li>
        <li><a href="#">pengembalian</a></li>
        <li><a href="#">TTD</a></li>
        <li><a href="#">Contact</a></li>

        <a href="out.php"> <i class="icon-out fas fa-sign-out-alt"></i></a>
    </nav>
  </header>

  <br><br><br><br>
  <?php echo "<div class='head-1'>Selamat Datang " . $_SESSION['nama'] . "&nbsp;<i class='icon fas fa-user-alt'></i></div> ";
  $tes = $_SESSION['nama'];
  if ($tes == null)
    header('location:login.php');
  ?>

  <br><br>
  <div class="main-container">
    <div class="rows-col-12">
      <img src="assets/img/quote.png" alt="" id="main-img" class="img-fluid">
    </div>
  </div>
  <br><br>
  <h1 class="text-center fw-bold">Buku-buku yang Ada di Perpustakan UNM</h1>
  <br>
  <div class="row">

    <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/buku (3).png" alt="" class="p-gambar shadow-sm">
        <h3>The Beauty of The Night</h3>
        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up1">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up1" tabindex="-1" aria-labelledby="pop-up1Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-up1Label">The Beauty of The Night</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Stok Buku : 115 <br>
                Deskripsi Buku
                <p>Lorem ipsum dolor sit amet. Sit
                   placeat modi sed rerum suscipit qui dicta
                    sequi non iusto eligendi eos omnis consequatur.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div><br><br>
    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/buku (1).png" alt="" class="p-gambar shadow-sm">
        <h3>The Village</h3>
        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up2">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up2" tabindex="-1" aria-labelledby="pop-upLabel2" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-upLabel2">The Village</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Stok Buku : 111 <br>
                Deskripsi Buku
                <p>Lorem ipsum dolor sit amet. Sit
                   placeat modi sed rerum suscipit qui dicta
                   sequi non iusto eligendi eos omnis consequatur.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/buku (2).png" alt="" class="p-gambar shadow-sm">
        <h3>The Tale of Monster Falls</h3>
        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up" tabindex="-1" aria-labelledby="pop-upLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-upLabel">The Tale of Monster Falls</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Stok Buku : 115 <br>
                Deskripsi Buku
                <p>Lorem ipsum dolor sit amet. Sit
                   placeat modi sed rerum suscipit qui dicta
                    sequi non iusto eligendi eos omnis consequatur.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/buku (4).png" alt="" class="p-gambar shadow-sm">

        <h3>The Village</h3>

        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up3">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up3" tabindex="-1" aria-labelledby="pop-up3Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-up3Label">The Village</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Stok Buku : 85 <br>
                Deskripsi Buku
                <p>Lorem ipsum dolor sit amet. Sit
                   placeat modi sed rerum suscipit qui dicta
                    sequi non iusto eligendi eos omnis consequatur.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div>
  </div>
  <div class="row"><br></div>
  <div class="row"><br></div>
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/buku (5).png" alt="" class="p-gambar shadow-sm">
        <h3>The Rose</h3>
        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up4">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up4" tabindex="-1" aria-labelledby="pop-up4Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-up4Label">The Rose</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Stok Buku : 87 <br>
                Deskripsi Buku
                <p>Lorem ipsum dolor sit amet. Sit
                   placeat modi sed rerum suscipit qui dicta
                    sequi non iusto eligendi eos omnis consequatur.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/buku (6).png" alt="" class="p-gambar shadow-lg">
        <h3>Daily Beauty Tips</h3>
        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up5">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up5" tabindex="-1" aria-labelledby="pop-up5Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-up5Label">Daily Beauty Tips</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Stok Buku : 89 <br>
                Deskripsi Buku
                <p>Lorem ipsum dolor sit amet. Sit
                   placeat modi sed rerum suscipit qui dicta
                    sequi non iusto eligendi eos omnis consequatur.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/buku (7).png" alt="" class="p-gambar shadow-sm">
        <h3>Basis Data MySQL</h3>
        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up6">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up6" tabindex="-1" aria-labelledby="pop-up6Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-up6Label">Basis Data MySQL</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Stok Buku : 56<br>
                Deskripsi Buku
                <p>Lorem ipsum dolor sit amet. Sit
                   placeat modi sed rerum suscipit qui dicta
                    sequi non iusto eligendi eos omnis consequatur.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/buku (8).png" alt="" class="p-gambar shadow-sm">
        <h3>Two Side</h3>
        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up7">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up7" tabindex="-1" aria-labelledby="pop-up7Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-up7Label">Two Side</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Stok Buku : 55 <br>
                Deskripsi Buku
                <p>Lorem ipsum dolor sit amet. Sit
                   placeat modi sed rerum suscipit qui dicta
                    sequi non iusto eligendi eos omnis consequatur.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div>
  </div>
  <div class="row"><br></div>
  <div class="row"><br></div>
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/buku (9).png" alt="" class="p-gambar shadow-sm">
        <h3>Modern Architecture</h3>
        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up8">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up8" tabindex="-1" aria-labelledby="pop-up8Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-up8Label">Modern Architecture</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Stok Buku : 112 <br>
                Deskripsi Buku
                <p>Lorem ipsum dolor sit amet. Sit
                   placeat modi sed rerum suscipit qui dicta
                    sequi non iusto eligendi eos omnis consequatur.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/buku (10).png" alt="" class="p-gambar shadow-lg">
        <h3>This is The First Poem I Wrote</h3>
        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up9">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up9" tabindex="-1" aria-labelledby="pop-up9Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-up9Label">This is The First Poem I Wrote</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Stok Buku : 105 <br>
                Deskripsi Buku
                <p>Lorem ipsum dolor sit amet. Sit
                   placeat modi sed rerum suscipit qui dicta
                    sequi non iusto eligendi eos omnis consequatur.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/buku (11).png" alt="" class="p-gambar shadow-sm">
        <h3>Theory of Happiness</h3>
        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up10">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up10" tabindex="-1" aria-labelledby="pop-up10Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-up10Label">Theory of Happiness</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Stok Buku : 65 <br>
                Deskripsi Buku
                <p>Lorem ipsum dolor sit amet. Sit
                   placeat modi sed rerum suscipit qui dicta
                    sequi non iusto eligendi eos omnis consequatur.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/buku (12).png" alt="" class="p-gambar shadow-sm">
        <h3>The Tale of Monster Falls II</h3>
        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up11">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up11" tabindex="-1" aria-labelledby="pop-up11Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-up11Label">The Tal of Monster Falls II</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Stok Buku : 115 <br>
                Deskripsi Buku
                <p>Lorem ipsum dolor sit amet. Sit
                   placeat modi sed rerum suscipit qui dicta
                    sequi non iusto eligendi eos omnis consequatur.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div>
  </div><br><br>
  <div class="row">

    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/buku (13).png" alt="" class="p-gambar shadow-sm">
        <h3>Forest of Secret</h3>
        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up12">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up12" tabindex="-1" aria-labelledby="pop-up12Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-up12Label">Forest of Secret</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Stok Buku : 39 <br>
                Deskripsi Buku
                <p>Lorem ipsum dolor sit amet. Sit
                   placeat modi sed rerum suscipit qui dicta
                    sequi non iusto eligendi eos omnis consequatur.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div><br><br>
    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/buku (14).png" alt="" class="p-gambar shadow-sm">
        <h3>Friend</h3>
        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up13">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up13" tabindex="-1" aria-labelledby="pop-up13Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-up13Label">Friend</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Stok Buku : 112 <br>
                Deskripsi Buku
                <p>Lorem ipsum dolor sit amet. Sit
                   placeat modi sed rerum suscipit qui dicta
                    sequi non iusto eligendi eos omnis consequatur.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/buku (15).png" alt="" class="p-gambar shadow-sm">
        <h3>The Jazz Singer</h3>
        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up14">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up14" tabindex="-1" aria-labelledby="pop-up14Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-up14Label">The Jazz Singer</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Stok Buku : 95 <br>
                Deskripsi Buku
                <p>Lorem ipsum dolor sit amet. Sit
                   placeat modi sed rerum suscipit qui dicta
                    sequi non iusto eligendi eos omnis consequatur.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div>

  <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-sm-3 ">
      <div class="container">
        <img src="assets/img/-.png" alt="" class="p-gambar shadow-lg">
        <h3>-</h3>
        <button class="btnku">Pinjam</button>
        <button class="btn-1nfo" data-bs-toggle="modal" data-bs-target="#pop-up15">
          Informasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="pop-up15" tabindex="-1" aria-labelledby="pop-up15Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pop-up15Label">-</h5>
                <button class="border-none fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               -
              </div>
            </div>
          </div>
        </div>
        <div class="row"><br> </div>
      </div>
    </div>
  </div><br><br>

  <div class=" container-fluid text-start ps-5 p-1" style="background-color: #202020;">
    <div class="row py-4">
      <div class="col-6 p-3 text-white">Copyright ©2022 Perpustakaan Universitas Negeri Makassar</div>
      <div class="col-6">
        <div class="ms-4 p-3 icon-1 text-white text-end" style="cursor: pointer;">
          <a href="#" class="fab fa-facebook-f icon-5">&emsp;</a>
          <a href="#" class="fab fa-twitter icon-5">&emsp;</a>
          <a href="#" class="fab fa-instagram icon-5">&emsp;</a>&emsp;
        </div>
      </div>
    </div>

    <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>