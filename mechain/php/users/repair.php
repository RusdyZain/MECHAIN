<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

  ?>

  <!DOCTYPE html>
  <html lang="en">

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Repair</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/animate.css">

    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/styleRepair.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  </head>

  <body>
    <header id="header">
      <div class="bg-color">
        <!--nav-->
        <nav class="nav navbar-default navbar-fixed-top">
          <div class="container">
            <div class="col-md-12">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar"
                  aria-expanded="false" aria-controls="navbar">
                  <span class="fa fa-bars"></span>
                </button>
                <a href="index.html" class="navbar-brand">MECHAIN</a>
              </div>
              <div class="collapse navbar-collapse navbar-right" id="mynavbar">
                <ul class="nav navbar-nav">
                  <li><a href="http://localhost/mechain/php/users/user.php">Home</a></li>
                  <li class="active"><a href="http://localhost/mechain/php/users/repair.php">Repair</a></li>
                  <li><a href="http://localhost/mechain/php/users/artikel.php">Article</a></li>
                  <li><a href="http://localhost/mechain/php/users/location.php">Location</a></li>
                  <li><a href="http://localhost/mechain/php/users/user.php#contact">Contact</a></li>
                  <li style="padding-left: 30px;"><a href="/mechain/php/login/logout.php">
                      <?php echo $_SESSION['name']; ?>
                    </a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <section id="menu" class="menu">
      <h2>Beberapa Masalah Pada Sepeda Motor</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quos
        velit cupiditate ducimus voluptatum excepturi.
      </p>
      <div class="row">
        <div class="menu-card">
          <iframe width="350" height="200" src="https://www.youtube.com/embed/fj-LlNktCAI" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
          <h3 class="menu-card-title">- Cara Cepat Mengatasi Motor Mogok Tak Mau Nyala -</h3>
          <p class="menu-card-price">Motor Mogok
          </p>
        </div>
        <div class="menu-card">
          <iframe width="350" height="200" src="https://www.youtube.com/embed/fj-LlNktCAI" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
          <h3 class="menu-card-title">- Cara Cepat Mengatasi Motor Mogok Tak Mau Nyala -</h3>
          <p class="menu-card-price">Motor Mogok
          </p>
        </div>
        <div class="menu-card">
          <iframe width="350" height="200" src="https://www.youtube.com/embed/fj-LlNktCAI" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
          <h3 class="menu-card-title">- Cara Cepat Mengatasi Motor Mogok Tak Mau Nyala -</h3>
          <p class="menu-card-price">Motor Mogok
          </p>
        </div>
        <div class="menu-card">
          <iframe width="350" height="200" src="https://www.youtube.com/embed/fj-LlNktCAI" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
          <h3 class="menu-card-title">- Cara Cepat Mengatasi Motor Mogok Tak Mau Nyala -</h3>
          <p class="menu-card-price">Motor Mogok
          </p>
        </div>
        <div class="menu-card">
          <iframe width="350" height="200" src="https://www.youtube.com/embed/fj-LlNktCAI" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
          <h3 class="menu-card-title">- Cara Cepat Mengatasi Motor Mogok Tak Mau Nyala -</h3>
          <p class="menu-card-price">Motor Mogok
          </p>
        </div>
        <div class="menu-card">
          <iframe width="350" height="200" src="https://www.youtube.com/embed/fj-LlNktCAI" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
          <h3 class="menu-card-title">- Cara Cepat Mengatasi Motor Mogok Tak Mau Nyala -</h3>
          <p class="menu-card-price">Motor Mogok
          </p>
        </div>
        <div class="menu-card">
          <iframe width="350" height="200" src="https://www.youtube.com/embed/fj-LlNktCAI" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
          <h3 class="menu-card-title">- Cara Cepat Mengatasi Motor Mogok Tak Mau Nyala -</h3>
          <p class="menu-card-price">Motor Mogok
          </p>
        </div>
        <div class="menu-card">
          <iframe width="350" height="200" src="https://www.youtube.com/embed/fj-LlNktCAI" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
          <h3 class="menu-card-title">- Cara Cepat Mengatasi Motor Mogok Tak Mau Nyala -</h3>
          <p class="menu-card-price">Motor Mogok
          </p>
        </div>
        <div class="menu-card">
          <iframe width="350" height="200" src="https://www.youtube.com/embed/fj-LlNktCAI" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
          <h3 class="menu-card-title">- Cara Cepat Mengatasi Motor Mogok Tak Mau Nyala -</h3>
          <p class="menu-card-price">Motor Mogok
          </p>
        </div>

      </div>
      <!-- <iframe src="doc/menu2023.pdf" width="100%" height="800"></iframe> -->
    </section>
    <!-- Menu Section End -->


    <!--Footer-->
    <footer class="" id="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 footer-copyright">
            © Zain reserved
            <div class="credits">
              Designed by <a>Rusdy Team</a>
            </div>
          </div>
          <div class="col-sm-5 footer-social">
            <div class="pull-right hidden-xs hidden-sm">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--/footer-->

    <!-- feather icons -->
    <script>
      feather.replace();
    </script>

    <!-- my JavaScript -->
    <script src="../../js/jquery-2.1.3.min.js"></script>
    <script src="../../js/plugins.js"></script>
    <script src="../../js/jquery.appear.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/modernizr.js"></script>
    <script src="../../js/pace.min.js"></script>

    <!--Script-->
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/jquery.easing.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/wow.js"></script>
    <script src="../../js/custom.js"></script>
  </body>

  </html>

  <?php
} else {
  header("Location: index.php");
  exit();
}
?>