<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet'
            type='text/css'>
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/animate.css">
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/styleLocation.css">
        <title>Location</title>
    </head>

    <body>
        <header id="header">
            <div class="bg-color">
                <!--nav-->
                <nav class="nav navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="fa fa-bars"></span>
                                </button>
                                <a href="index.html" class="navbar-brand">MECHAIN</a>
                            </div>
                            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
                                <ul class="nav navbar-nav">
                                    <li><a href="http://localhost/mechain/php/users/user.php">Home</a></li>
                                    <li><a href="#repair">Repair</a></li>
                                    <li><a href="http://localhost/mechain/php/users/artikel.php">Article</a></li>
                                    <li class="active"><a href="http://localhost/mechain/php/users/location.php">Location</a></li>
                                    <li><a href="http://localhost/mechain/php/users/user.php#contact">Contact</a></li>
                                    <li style="padding-left: 30px;"><a href="mechain/php/login/logout.php">
                                            <a href="mechain/php/login/logout.php">
                                                <?php echo $_SESSION['name']; ?>
                                            </a>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <section id="about" class="about">
            <div class="row">
                <div class="about-img">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31559.602107711507!2d116.1312431!3d-8.600774!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb8b01098c353%3A0x1fdc5c1983bbd1c3!2sKarya%20Motor!5e0!3m2!1sid!2sid!4v1683304663184!5m2!1sid!2sid"
                        width="600" height="350" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="content">
                    <h3>Karya Motor</h3>
                    <div class="star">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i> <i data-feather="star"></i>
                        <i data-feather="star"></i> <i data-feather="star"></i>
                    </div>
                    <p>
                        Bengkel mobil yang sangat andal dan profesional, dengan mekanik yang
                        ahli dan layanan yang teliti. Mereka sangat responsif terhadap
                        kebutuhan pelanggan dan fasilitas mereka sangat modern dan bersih.
                        Mereka pantas mendapatkan bintang lima dalam kualitas layanan mereka
                        dan sangat direkomendasikan untuk servis mobil.
                    </p>
                    <h4>- Rina Dewi -</h4>
                    <a href="https://wa.me/qr/RJYDYURBCAF2H1" class="cta" target="_blank">Chat Sekarang</a>
                </div>
            </div>
            <div class="row">
                <div class="about-img">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0659708598446!2d116.10771099999998!3d-8.589656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf616d7e1045%3A0x2c0fc2fe82bf8dbb!2sBengkel%20Tirta%20Sari%20Motor!5e0!3m2!1sid!2sid!4v1683304956097!5m2!1sid!2sid"
                        width="600" height="350" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="content">
                    <h3>Bengkel Tirta Sari Motor</h3>
                    <div class="star">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i> <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <p>
                        Sesuai standar oprasional.... harga terjangkau dan strategis....
                    </p>
                    <h4>- MANDRI WIJAYA Channel -</h4>
                    <a href="https://wa.me/qr/RJYDYURBCAF2H1" class="cta" target="_blank">Chat Sekarang</a>
                </div>
            </div>
            <div class="row">
                <div class="about-img">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0555707663757!2d116.107681!3d-8.5906559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf614b033609%3A0x6dd293e6fa161ed5!2sBengkel%20Wero!5e0!3m2!1sid!2sid!4v1683305082571!5m2!1sid!2sid"
                        width="600" height="350" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="content">
                    <h3>Bengkel Wero</h3>
                    <div class="star">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i> <i data-feather="star"></i>
                        <i data-feather="star"></i> <i data-feather="star"></i>
                    </div>
                    <p>
                        Semuar service bisa masuk. Kyk mesin potong rumpul dll nya. Bukan
                        cuma mesin motor aja
                    </p>
                    <h4>- Egi Firmansyah -</h4>
                    <a href="https://wa.me/qr/RJYDYURBCAF2H1" class="cta" target="_blank">Chat Sekarang</a>
                </div>
            </div>
            <div class="row">
                <div class="about-img">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.001921368718!2d116.10064530000001!3d-8.5958121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf654a9b881f%3A0x44f4a9b389afd36a!2sBengkel%20MULTI%20ENGINE%20SERVICE!5e0!3m2!1sid!2sid!4v1683305528054!5m2!1sid!2sid"
                        width="600" height="350" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="content">
                    <h3>Bengkel MULTI ENGINE SERVICE</h3>
                    <div class="star">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i> <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star" class="star2"></i>
                    </div>

                    <p>
                        Harga dan jasa yang diberikan top markotop! Gak kecewa 2x ke sini.
                        Edit: 3 kali.
                    </p>
                    <h4>- Hafizh Maulana Kusumah -</h4>
                    <a href="https://wa.me/qr/RJYDYURBCAF2H1" class="cta" target="_blank">Chat Sekarang</a>
                </div>
            </div>
            <div class="row">
                <div class="about-img">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.2563308228987!2d116.09229629999999!3d-8.5713337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc111f1488661%3A0xf761a2cc80d89b98!2sBengkel%20Barokah%20Motor%20eron!5e0!3m2!1sid!2sid!4v1683305727163!5m2!1sid!2sid"
                        width="600" height="350" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="content">
                    <h3>Bengkel Barokah Motor eron</h3>
                    <div class="star">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i> <i data-feather="star"></i>
                        <i data-feather="star"></i> <i data-feather="star"></i>
                    </div>
                    <p>Pelayanannya mantap</p>
                    <h4>- Mahmudin Moden -</h4>
                    <a href="https://wa.me/6283142720212?text=Hi%20Qiscus" class="cta" target="_blank">Chat Sekarang</a>
                </div>
            </div>
            <div class="row">
                <div class="about-img">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.250141901528!2d116.1084611!3d-8.57193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc1b5cc7e26bd%3A0x25b514ce550720d1!2sbengkel%20family%20motor!5e0!3m2!1sid!2sid!4v1683305807126!5m2!1sid!2sid"
                        width="600" height="350" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="content">
                    <h3>bengkel family motor</h3>
                    <div class="star">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i> <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star" class="star2"></i>
                    </div>
                    <p>
                        Bengkel cukup lengkap ada oli, ban sparepart motor dan dikerjakan
                        oleh anak muda yang cekatan semua menggunakan alat yang bertenaga
                        angin buka baut hingga ganti ban
                    </p>
                    <h4>- Iwan Syarif Mathan -</h4>
                    <a href="https://wa.me/6283142720212?text=Hi%20Qiscus" class="cta" target="_blank">Chat Sekarang</a>
                </div>
            </div>
        </section>
        <!-- About Section End -->

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

        <!--Script-->
        <script src="../../js/jquery.min.js"></script>
        <script src="../../js/jquery.easing.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/wow.js"></script>
        <script src="../../js/custom.js"></script>
        <script defer src="../../js/reveal.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    </body>

    </html>

    <?php
} else {
    header("Location: index.php");
    exit();
}
?>