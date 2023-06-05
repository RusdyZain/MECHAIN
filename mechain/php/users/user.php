<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MECHAIN</title>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/animate.css">
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
    </head>

    <body>
        <!--header-->
        <header class="main-header" id="header">
            <div class="bg-color">
                <!--nav-->
                <nav class="nav navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="fa fa-bars"></span>
                                </button>
                                <a href="user.php" class="navbar-brand">MECHAIN</a>
                            </div>
                            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="http://localhost/mechain/php/users/user.php">Home</a></li>
                                    <li><a href="http://localhost/mechain/php/fitur/repair.php">Repair</a></li>
                                    <li><a href="http://localhost/mechain/php/fitur/artikel.php">Article</a></li>
                                    <li><a href="http://localhost/mechain/php/fitur/location.php">Location</a></li>
                                    <li><a href="http://localhost/mechain/php/users/user.php#contact">Contact</a></li>
                                    <li style="padding-left: 30px;">
                                        <form id="logoutForm" method="POST">
                                            <a href="../login/logout.php" onclick="logout();"><?php echo $_SESSION['name']; ?></a>
                                            <input type="hidden" name="logout">
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <!--/ nav-->
                <div class="container text-center">
                    <div class="wrapper wow fadeInUp delay-05s">
                        <h2 class="top-title">REPAIR SHOP MOBILE</h2>
                        <h3 class="title">MECHAIN</h3>
                        <h4 class="sub-title">Get Your Repair Anywhere</h4>
                        <button type="submit" class="btn btn-submit"><a href="http://localhost/mechain/php/fitur/repair.php" style="color: #000; text-decoration: none;">Get Repair</a></button>
                    </div>
                </div>
            </div>
        </header>
        <!--/ header-->
        <!--Quotes-->
        <section id="cta-1">
            <div class="container">
                <div class="row">
                    <div class="cta-info text-center">
                        <h3>Kita tidak berfikir apa yang dirasakan mesin<br> Sebaliknya kita
                            merasakan apa yang mesin pikirkan<br>-Antonio Damasio-</h3>
                    </div>
                </div>
            </div>
        </section>
        <!--/Quotes-->

        <!--Repair-->
        <section class="information">
            <div class="container_information">
                <h2 class="section-title-inf">LOKASI BENGKEL DI MATARAM</h2>
                <div class="swiper swiper1">
                    <div class="information-cards swiper-wrapper">
                        <div class="information-card swiper-slide">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31559.602107711507!2d116.1312431!3d-8.600774!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb8b01098c353%3A0x1fdc5c1983bbd1c3!2sKarya%20Motor!5e0!3m2!1sid!2sid!4v1683304663184!5m2!1sid!2sid" width="203" height="181" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h5>Karya Motor</h5>
                            <h6>Jl. TGH. Faesal No.9, Mandalika, Kec. Sandubaya, Kota Mataram, Nusa Tenggara Bar. 83233</h6>
                        </div>
                        <div class="information-card swiper-slide">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0659708598446!2d116.10771099999998!3d-8.589656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf616d7e1045%3A0x2c0fc2fe82bf8dbb!2sBengkel%20Tirta%20Sari%20Motor!5e0!3m2!1sid!2sid!4v1683304956097!5m2!1sid!2sid" width="203" height="181" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h5>Bengkel Tirta Sari Motor</h5>
                            <h6>Jl. Arif Rahman Hakim No.7, Mataram Tim., Kec. Mataram, Kota Mataram, Nusa Tenggara Bar.
                                83217</h6>
                        </div>
                        <div class="information-card swiper-slide">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0555707663757!2d116.107681!3d-8.5906559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf614b033609%3A0x6dd293e6fa161ed5!2sBengkel%20Wero!5e0!3m2!1sid!2sid!4v1683305082571!5m2!1sid!2sid" width="203" height="181" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h5>Bengkel Wero</h5>
                            <h6>Jl. Arif Rahman Hakim No.17, Mataram Tim., Kec. Mataram, Kota Mataram, Nusa Tenggara Bar.
                                83127</h6>
                        </div>
                        <div class="information-card swiper-slide">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.001921368718!2d116.10064530000001!3d-8.5958121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf654a9b881f%3A0x44f4a9b389afd36a!2sBengkel%20MULTI%20ENGINE%20SERVICE!5e0!3m2!1sid!2sid!4v1683305528054!5m2!1sid!2sid" width="203" height="181" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h5>Bengkel Multi Engine Service</h5>
                            <h6>Jl. Swakarya Raya No.4, Pagesangan, Kec. Sekarbela, Kota Mataram, Nusa Tenggara Bar. 83127
                            </h6>
                        </div>
                        <div class="information-card swiper-slide">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.2563308228987!2d116.09229629999999!3d-8.5713337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc111f1488661%3A0xf761a2cc80d89b98!2sBengkel%20Barokah%20Motor%20eron!5e0!3m2!1sid!2sid!4v1683305727163!5m2!1sid!2sid" width="203" height="181" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h5>Bengkel Barokah Motor Eron</h5>
                            <h6>C3HR+FW7, Moncok telaga mas, Jl. Lestari Gg, Kec. Ampenan, Kota Mataram, Nusa Tenggara Bar.
                                83113</h6>
                        </div>
                        <div class="information-card swiper-slide">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.250141901528!2d116.1084611!3d-8.57193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc1b5cc7e26bd%3A0x25b514ce550720d1!2sbengkel%20family%20motor!5e0!3m2!1sid!2sid!4v1683305807126!5m2!1sid!2sid" width="203" height="181" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h5>Bengkel Family Motor</h5>
                            <h6>jl dr soetomo ruko no 1 marong jamak selatan, Kota Mataram, Nusa Tenggara Bar. 83122</h6>
                        </div>
                        <div class="information-card swiper-slide">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.9900118277483!2d116.09942639999998!3d-8.5969563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf7aa6d9acdf%3A0x7fe5e06adbffc90a!2sRoemah%20Bengkel!5e0!3m2!1sid!2sid!4v1683305862312!5m2!1sid!2sid" width="203" height="181" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h5>Roemah Bengkel</h5>
                            <h6>Jalan Anca 7 No.10, Pagesangan Bar., Kec. Mataram, Kota Mataram, Nusa Tenggara Bar. 83115
                            </h6>
                        </div>
                        <div class="information-card swiper-slide">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.974348626128!2d116.1127427!3d-8.5984609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf4281033765%3A0x432d306932bfd412!2sCahaya%20Motor%20Bengkel!5e0!3m2!1sid!2sid!4v1683305918314!5m2!1sid!2sid" width="203" height="181" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h5>Cahaya Motor Bengkel</h5>
                            <h6>Jl. Guru Bangkol Blok A No.3, Pagesangan Tim., Kec. Mataram, Kota Mataram, Nusa Tenggara
                                Bar. 83127</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/Repair-->

        <!--Artikel-->
        <section class="artikel">
            <h2 class="section-title-inf" style="color:#f8f8f8 ;">REKOMENDASI ARTIKEL</h2>
            <ul>
                <li class="booking-card" style="background-image: url('https://www.suzukicdn.com/uploads/news/Nex_II_(1)2.jpg');">
                    <div class="book-container">
                        <div class="content">
                            <button class="btn"><a href="https://www.suzuki.co.id/tips-trik/5-cara-merawat-motor-baru-yang-wajib-diperhatikan?pages=all">Baca
                                    Artikel</a></button>
                        </div>
                    </div>
                    <div class="informations-container">
                        <h2 class="title-inf">5 Cara Merawat Motor Baru yang Wajib Diperhatikan</h2>
                        <p class="sub-title-inf">SUZUKI Tips & Trik</p>
                        <div class="more-information">
                            <div class="info-and-date-container">
                                <div class="box info">
                                    <p>Baik dibaca untuk pengguna baru sepeda motor</p>
                                </div>
                                <div class="box date">
                                    <p>14 Juni 2019</p>
                                </div>
                            </div>
                            <p class="disclaimer">Servis rutin memang menjadi agenda rutin yang wajib dilakukan pemilik
                                sepeda motor jika ingin kendaraannya awet. Untungnya setiap sepeda motor baru akan
                                dilengkapi dengan layanan servis gratis yang bisa diakses di bengkel resmi.</p>
                        </div>
                    </div>
                </li>
                <li class="booking-card" style="background-image: url(https://media.suara.com/pictures/653x366/2022/01/25/97025-ilustrasi-mengecek-mesin-sepeda-motor-pexels.webp);">
                    <div class="book-container">
                        <div class="content">
                            <button class="btn"><a href="https://yoursay.suara.com/lifestyle/2022/01/25/185112/4-cara-merawat-mesin-sepeda-motor-agar-tetap-awet">Baca
                                    Artikel</a></button>
                        </div>
                    </div>
                    <div class="informations-container">
                        <h2 class="title-inf">4 Cara Merawat Mesin Sepeda Motor agar Tetap Awet</h2>
                        <p class="sub-title-inf">yoursay.id</p>
                        <div class="more-information">
                            <div class="info-and-date-container">
                                <div class="box info">
                                    <p>Terapkan 4 cara awetkan mesin motor</p>
                                </div>
                                <div class="box date">
                                    <p>25 Januari 2022</p>
                                </div>
                            </div>
                            <p class="disclaimer">Tidak dipungkiri lagi bahwa sepeda motor merupakan suatu kendaraan yang
                                praktis serta mudah digunakan oleh semua kalangan. Banyak dari kalangan masyarakat memilih
                                kendaraan dengan roda dua ini. Selain harganya yang cukup terjangkau, sepada motor memiliki
                                sejumlah manfaat serta kegunaan seperti untuk keperluan belanja, mengantar atau menjemput
                                anak sekolah, digunakan untuk bekerja, mengantar barang, serta sejumlah manfaat lainnya.</p>
                        </div>
                    </div>
                </li>
                <li class="booking-card" style="background-image: url(https://d1n6dbtoa2690v.cloudfront.net/article/592bde3e150ba016529b3916/592bde3e150ba016529b3916_1603770047.webp);">
                    <div class="book-container">
                        <div class="content">
                            <button class="btn"><a href="https://www.pricebook.co.id/article/tips_tricks/6726/kerusakan-motor-matic">Baca
                                    Artikel</a></button>
                        </div>
                    </div>
                    <div class="informations-container">
                        <h2 class="title-inf">5 Kerusakan Umum Motor Matic dan Cara Cepat Mengatasinya</h2>
                        <p class="sub-title-inf">pricebook</p>
                        <div class="more-information">
                            <div class="info-and-date-container">
                                <div class="box info">
                                    <p>Memperluas pengetahuan tentang mesin motor</p>
                                </div>
                                <div class="box date">
                                    <p>7 Januari 2023</p>
                                </div>
                            </div>
                            <p class="disclaimer">Motor matik telah menjadi fenomena di pasar otomotif di Indonesia dan
                                berhasil mengalahkan penjualan motor sport dan bebek yang mulai ditinggalkan.</p>
                        </div>
                    </div>
                </li>
                <li class="booking-card" style="background-image: url(https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634787819/pqi209szrlcqffku5ogp_tpxmk7.jpg);">
                    <div class="book-container">
                        <div class="content">
                            <button class="btn"><a href="https://kumparan.com/info-otomotif/cara-mengatasi-motor-tidak-bisa-hidup-cek-langkah-alternatif-berikut-1wlLBiY0MkP/full">Baca
                                    Artikel</a></button>
                        </div>
                    </div>
                    <div class="informations-container">
                        <h2 class="title-inf">Cara Mengatasi Motor Tidak Bisa Hidup, Cek Langkah Alternatif Berikut</h2>
                        <p class="sub-title-inf">Infootomotif</p>
                        <div class="more-information">
                            <div class="info-and-date-container">
                                <div class="box info">
                                    <p>Penting untuk menambah wawasan tentang keadaan motor</p>
                                </div>
                                <div class="box date">
                                    <p>22 Oktober 2021</p>
                                </div>
                            </div>
                            <p class="disclaimer">Bagaimana cara mengatasi motor tidak bisa hidup walaupun sudah distarter
                                berkali-kali? Tenang, mungkin Anda bisa mengecek dulu di mana persoalannya. </p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <!--/Artikel--->

        <!--Contact-->
        <section class="section-padding wow fadeInUp delay-02s" id="contact">
            <div class="container">
                <div class="row white">
                    <div class="col-md-8 col-sm-12">
                        <div class="section-title">
                            <h2 class="head-title black">Contact Us</h2>
                            <hr class="botm-line">
                            <p class="sec-para black">Hubungi kami jika ada komentar dan saran mengenai keadaan website dan
                                rekomendasi fitur.</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-6" style="padding-left:0px;">
                            <h3 class="cont-title">Email Us</h3>
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <div class="contact-info">
                                <form action="../config/configContact.php" method="post" role="form" class="contactForm">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validation"></div>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <div class="validation"></div>
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                        <div class="validation"></div>
                                    </div>
                                    <button type="submit" class="btn btn-send">Send</button>
                                </form>
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-6">
                            <h3 class="cont-title">Visit Us</h3>
                            <div class="location-info">
                                <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Jl. Majapahit No.
                                    62 Mataram, Nusa Tenggara Barat Indonesia</p>
                                <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Phone: +62 878 6569
                                    3246</p>
                                <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: <a href="" class="link-dec">ryanfajri28@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
                                <span aria-hidden="true" class="fa fa-envelope-o"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/Contact-->

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