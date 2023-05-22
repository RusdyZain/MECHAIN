<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <title>Abstract</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet'
            type='text/css'>
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/animate.css">

        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="stylesheet" href="/css/base.css">
        <link rel="stylesheet" href="/css/vendor.css">
        <link rel="stylesheet" href="/css/main.css">

    </head>

    <body id="top" style="background-color: black;">
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
                                    <li class="active"><a href="http://localhost/mechain/php/users/artikel.php">Article</a></li>
                                    <li><a href="http://localhost/mechain/php/users/location.php">Location</a></li>
                                    <li><a href="http://localhost/mechain/php/users/user.php#contact">Contact</a></li>
                                    <li style="padding-left: 30px;"><a>
                                            <?php echo $_SESSION['name']; ?>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <section id="bricks" style="padding-top: 100px;">
            <div class="row masonry">
                <!-- wrapper -->
                <div class="bricks-wrapper">
                    <div class="grid-sizer"></div>
                    <div class="brick entry featured-grid animate-this">
                        <div class="entry-content">
                            <div id="featured-post-slider" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <div class="featured-post-slide">
                                            <div class="post-background"
                                                style="background-image:url('../../img/artikel/oli.jpg')">
                                            </div>
                                            <div class="overlay"></div>

                                            <div class="post-content">
                                                <ul class="entry-meta">
                                                    <li>2 Juli 2021</li>
                                                    <li><a href="#">mobil.com</a></li>
                                                </ul>

                                                <h1 class="slide-title"><a
                                                        href="https://www.mobil.co.id/id-id/consumer/faqs-and-tips/bike-and-scooter-faqs-and-tips/tips-mencari-waktu"
                                                        title="">Kapan Waktu Ganti Oli Motor Yang Tepat?</a></h1>
                                            </div>

                                        </div>
                                    </li> <!-- /slide -->

                                    <li>
                                        <div class="featured-post-slide">

                                            <div class="post-background"
                                                style="background-image:url('../../img/artikel/Cek-tekanan-udara-ban-motor.jpg')">
                                            </div>

                                            <div class="overlay"></div>

                                            <div class="post-content">
                                                <ul class="entry-meta">
                                                    <li>7 Maret 2022</li>
                                                    <li><a href="#">Momotor.id</a></li>
                                                </ul>

                                                <h1 class="slide-title"><a
                                                        href="https://momotor.id/news/perawatan-ban-motor/" title="">Tips
                                                        Perawatan Ban Motor Supaya Lebih Awet, Lakukan Beberapa Tips
                                                        Berikut!</a></h1>
                                            </div>

                                        </div>
                                    </li> <!-- /slide -->

                                    <li>
                                        <div class="featured-post-slide">

                                            <div class="post-background"
                                                style="background-image:url('../../img/artikel/cara-merawat-motor-scaled.jpg');">
                                            </div>

                                            <div class="overlay"></div>

                                            <div class="post-content">
                                                <ul class="entry-meta">
                                                    <li> 12 Agustus 2023</li>
                                                    <li><a href="#" class="author">tugu.com</a></li>
                                                </ul>

                                                <h1 class="slide-title"><a
                                                        href="https://tugu.com/artikel/ini-dia-cara-merawat-motor-baru-agar-tetap-awet"
                                                        title="">Ini Dia Cara Merawat Motor Baru Agar Tetap Awet!</a></h1>
                                            </div>

                                        </div>
                                    </li> <!-- end slide -->

                                </ul> <!-- end slides -->
                            </div> <!-- end featured-post-slider -->
                        </div> <!-- end entry content -->
                    </div>

                    <article class="brick entry format-standard animate-this">

                        <div class="entry-thumb">
                            <a href="https://www.cnnindonesia.com/otomotif/20230224105251-600-918282/5-cara-merawat-kampas-rem-motor-agar-awet-dan-pakem"
                                class="thumb-link">
                                <img src="../../img/artikel/kampas.jpeg" alt="building">
                            </a>
                        </div>

                        <div class="entry-text">
                            <div class="entry-header">

                                <div class="entry-meta">
                                    <span class="cat-links">
                                        <a>www.cnnindonesia.com</a>
                                    </span>
                                </div>

                                <h1 class="entry-title"><a
                                        href="https://www.cnnindonesia.com/otomotif/20230224105251-600-918282/5-cara-merawat-kampas-rem-motor-agar-awet-dan-pakem">5
                                        Cara Merawat Kampas Rem Motor agar Awet dan Pakem </a></h1>

                            </div>
                            <div class="entry-excerpt">
                                CNN Indonesia -- Rem adalah komponen penting untuk mengurangi serta menghentikan laju
                                kendaraan. Penting untuk mengetahui cara merawat kampas rem motor untuk mencegah insiden
                                ketika berkendara.
                                Mengingat, salah satu penyebab kecelakaan lalu lintas disebabkan oleh tidak berfungsinya rem
                                kendaraan bermotor.</div>

                    </article> <!-- end article -->

                    <article class="brick entry format-standard animate-this">

                        <div class="entry-thumb">
                            <a href="https://ruber.id/coolant-motor-pentingnya-mengenal-cairan-pendingin-pada-kendaraan"
                                class="thumb-link">
                                <img src="../../img/artikel/ruber.jpg" alt="ferris wheel">
                            </a>
                        </div>

                        <div class="entry-text">
                            <div class="entry-header">

                                <div class="entry-meta">
                                    <span class="cat-links">
                                        <a>www.ruber.id</a>
                                    </span>
                                </div>

                                <h1 class="entry-title"><a
                                        href="https://ruber.id/coolant-motor-pentingnya-mengenal-cairan-pendingin-pada-kendaraan">Coolant
                                        Motor, Pentingnya Mengenal Cairan Pendingin pada Kendaraan</a></h1>

                            </div>
                            <div class="entry-excerpt">ruber.id – Ketika Anda mengendarai sepeda motor, salah satu komponen
                                penting yang harus Anda perhatikan adalah sistem pendingin mesin, atau Coolant (Cairan
                                pendingin).
                                Sistem ini berfungsi untuk menjaga suhu mesin agar tetap optimal selama operasi, mencegah
                                mesin dari overheating, dan menjaga kinerja mesin tetap optimal.</div>
                    </article> <!-- end article -->

                    <!-- format audio here -->
                    <article class="brick entry format-audio animate-this">

                        <div class="entry-thumb">
                            <a href="https://id.motor1.com/features/594314/tanda-shockbreaker-motor-harus-ganti"
                                class="thumb-link">
                                <img src="../../img/artikel/shock.png" alt="concert">
                            </a>
                        </div>

                        <div class="entry-text">
                            <div class="entry-header">

                                <div class="entry-meta">
                                    <span class="cat-links">
                                        <a>id.motor1.com</a>

                                    </span>
                                </div>

                                <h1 class="entry-title"><a
                                        href="https://id.motor1.com/features/594314/tanda-shockbreaker-motor-harus-ganti/">Simak
                                        Nih, Tanda Shockbreaker Sepeda Motor Harus Diganti</a></h1>

                            </div>
                            <div class="entry-excerpt">
                                Shockbreaker merupakan salah satu perangkat di sepeda motor yang berfungsi untuk meredam
                                goncangan pada sepeda motor ketika melewati permukaan jalan yang bergelombang, tidak rata
                                atau jalanan berlubang. Cara kerja dari perangkat ini menggunakan sistem hidrolik untuk
                                menyerap goncangan dan getaran pada sepeda motor. </div>
                        </div>

                    </article> <!-- /article -->

                    <article class="brick entry format-quote animate-this">

                        <div class="entry-thumb">
                            <blockquote>
                                <p>“Tidak perlu dilahirkan sebagai seorang bangsawan atau kaya untuk sukses dalam
                                    kehidupan.”</p>

                                <cite>Soichiro Honda</cite>
                            </blockquote>
                        </div>

                    </article> <!-- end article -->

                    <article class="brick entry animate-this">

                        <div class="entry-thumb">
                            <a href="https://otomotif.kompas.com/read/2020/10/29/110200315/pelajari-jenis-penyakit-pada-busi-yang-lazim-terjadi"
                                class="thumb-link">
                                <img src="../../img/artikel/busi.jpg" alt="Shutterbug">
                            </a>
                        </div>

                        <div class="entry-text">
                            <div class="entry-header">

                                <div class="entry-meta">
                                    <span class="cat-links">
                                        <a>otomotif.kompas.com</a>
                                    </span>
                                </div>

                                <h1 class="entry-title"><a
                                        href="https://otomotif.kompas.com/read/2020/10/29/110200315/pelajari-jenis-penyakit-pada-busi-yang-lazim-terjadil">Pelajari
                                        Jenis Penyakit pada Busi yang Lazim Terjadi!</a></h1>

                            </div>
                            <div class="entry-excerpt">
                                KOMPAS.com - Busi kendaraan memiliki peran yang penting pada jantung pacu kendaraan
                                bermotor. Terlepas dari bentuknya yang kecil, tanpa kehadiran busi, mesin mobil maupun
                                sepeda motor dipastikan tak memiliki daya untuk hidup. Memiliki fungsi sebagai sumber
                                percikan, busi diciptakan agar bisa bertahan pada perubahan suhu yang ekstrim dalam siklus
                                isap dan buang di ruang pembakaran secara berulang.</div>
                        </div>

                    </article> <!-- end article -->

                    <article class="brick entry animate-this">

                        <div class="entry-thumb">
                            <a href="https://momotor.id/news/jenis-oli-motor-berdasarkan-bahan-dasar-dan-fungsinya"
                                class="thumb-link">
                                <img src="../../img/artikel/Jenis-Oli-Motor-1.jpg" alt="USAF rocket">
                            </a>
                        </div>

                        <div class="entry-text">
                            <div class="entry-header">

                                <div class="entry-meta">
                                    <span class="cat-links">
                                        <a>momotor.id</a>
                                    </span>
                                </div>

                                <h1 class="entry-title"><a
                                        href="https://momotor.id/news/jenis-oli-motor-berdasarkan-bahan-dasar-dan-fungsinya">Pelajari
                                        Jenis Oli Motor Berdasarkan Bahan Dasar dan Fungsinya!</a></h1>

                            </div>
                            <div class="entry-excerpt">
                                momotor.id - Oli dalam kendaraan bermotor diibaratkan sebagai darah, karena merupakan
                                sesuatu yang sangat vital bagi kerja dan umur mesin. Untuk memilih hal ini harus dilakukan
                                dengan hati-hati dan tepat, sesuai dengan kebutuhan kendaraan anda, karena hal ini akan
                                memengaruhi performa dan kinerja dari kendaraan tersebut.</div>
                        </div>

                    </article> <!-- end article -->

                    <article class="brick entry format-gallery group animate-this">

                        <div class="entry-thumb">
                            <a href="https://www.cermati.com/artikel/bengkel-motor-sebagai-peluang-usaha-ini-tips-sukses-dan-strategi-yang-perlu-kamu-tahu"
                                class="thumb-link">
                                <img src="../../img/artikel/bengkel2.jpeg" alt="USAF rocket">
                            </a>

                        </div>

                        <div class="entry-text">
                            <div class="entry-header">

                                <div class="entry-meta">
                                    <span class="cat-links">
                                        <a>cermati.com</a>
                                    </span>
                                </div>

                                <h1 class="entry-title"><a
                                        href="https://www.cermati.com/artikel/bengkel-motor-sebagai-peluang-usaha-ini-tips-sukses-dan-strategi-yang-perlu-kamu-tahu">Bengkel
                                        Motor Sebagai Peluang Usaha? Ini Tips sukses dan Strategi yang Perlu Kamu Tahu</a>
                                </h1>

                            </div>
                            <div class="entry-excerpt">
                                Populasi motor yang tiap tahunnya semakin meningkat terutama di Jakarta maupun kota kota
                                besar lainnya di Indonesia sebesar 12 persen membuat peluang membuka usaha bengkel motor
                                semakin laris. Pada akhir tahun 2014 saja jumlah kendaraan roda dua di Ibu Kota telah
                                mencapai 13.084.372 unit dan semakin bertambah setiap tahunnya.</div>
                        </div>

                    </article> <!-- end article -->

                    <article class="brick entry animate-this">

                        <div class="entry-thumb">
                            <a href="https://katadata.co.id/sitinuraeni/berita/6184dd90764ca/pahami-cara-berkendara-motor-yang-baik-di-jalan-raya"
                                class="thumb-link">
                                <img src="../../img/artikel/jalanraya.jpg" alt="Pattern">
                            </a>
                        </div>

                        <div class="entry-text">
                            <div class="entry-header">

                                <div class="entry-meta">
                                    <span class="cat-links">
                                        <a>katadata.co.id</a>
                                    </span>
                                </div>

                                <h1 class="entry-title"><a
                                        href="https://katadata.co.id/sitinuraeni/berita/6184dd90764ca/pahami-cara-berkendara-motor-yang-baik-di-jalan-raya">Pahami
                                        Cara Berkendara Motor yang Baik di Jalan Raya</a></h1>

                            </div>
                            <div class="entry-excerpt">
                                Cara berkendara motor yang baik harus dipahami setiap orang. Kendaraan roda dua yang satu
                                ini merupakan moda transportasi yang banyak digunakan. Berdasarkan data yang dimuat
                                databoks, jumlah sepeda motor di Indonesia pada tahun 2015 mencapai 98,88 juta unik.</div>
                        </div>

                    </article> <!-- end article -->

                    <article class="brick entry animate-this">
                        <div class="entry-thumb video-image">
                            <a href="https://review.bukalapak.com/auto/bengkel-sepeda-motor-terdekat-119453"
                                class="thumb-link"></a>
                            <img src="../../img/artikel/bengkel-termahal-di-bandung.jpg" alt="bokeh">
                            </a>
                        </div>

                        <div class="entry-text">
                            <div class="entry-header">

                                <div class="entry-meta">
                                    <span class="cat-links">
                                        <a>review.bukalapak.com</a>
                                    </span>
                                </div>

                                <h1 class="entry-title"><a
                                        href="https://review.bukalapak.com/auto/bengkel-sepeda-motor-terdekat-119453">Tips
                                        Memilih Bengkel Sepeda Motor Terdekat yang Bagus</a></h1>

                            </div>
                            <div class="entry-excerpt">Bengkel sepeda motor terdekat bisa ditemukan dengan mudah tidak jauh
                                dari lokasi rumah. Meski begitu, biker sebaiknya tidak asal memilih bengkel hanya
                                berdasarkan jarak paling dekat saja. Akan lebih baik pemilihan bengkel mengacu pada
                                testimoni.</div>
                        </div>

                    </article> <!-- end article -->

                    <article class="brick entry animate-this">

                        <div class="entry-thumb">
                            <a href="otosia.com/berita/read/4746326/motor-harus-masuk-bengkel-kenali-tanda-tandanya"
                                class="thumb-link">
                                <img src="../../img/artikel/servis.jpg" alt="Lighthouse">
                            </a>
                        </div>

                        <div class="entry-text">
                            <div class="entry-header">

                                <div class="entry-meta">
                                    <span class="cat-links">
                                        <a>otosia.com</a>
                                    </span>
                                </div>

                                <h1 class="entry-title"><a
                                        href="otosia.com/berita/read/4746326/motor-harus-masuk-bengkel-kenali-tanda-tandanya">Motor
                                        Harus Masuk Bengkel, Kenali Tanda-Tandanya!</a></h1>

                            </div>
                            <div class="entry-excerpt">Otosia.com Beberapa tanda motor harus segera diservis sering kali
                                terasa oleh pemilik kendaraan. Apabila dibiarkan, biaya yang harus dikeluarkan untuk
                                perbaikan jauh lebih tinggi karena kerusakan besar mungkin saja terjadi.</div>
                        </div>

                    </article> <!-- end article -->

                    <article class="brick entry animate-this">

                        <div class="entry-thumb">
                            <a href="https://www.liputan6.com/otomotif/read/3679413/peran-mekanik-itu-sangat-penting-ini-buktinya"
                                class="thumb-link">
                                <img src="../../img/artikel/mekanik.jpg" alt="Liberty">
                            </a>
                        </div>

                        <div class="entry-text">
                            <div class="entry-header">

                                <div class="entry-meta">
                                    <span class="cat-links">
                                        <a>liputan6.com</a>
                                    </span>
                                </div>

                                <h1 class="entry-title"><a
                                        href="https://www.liputan6.com/otomotif/read/3679413/peran-mekanik-itu-sangat-penting-ini-buktinya">Peran
                                        Mekanik Itu Sangat Penting. Ini Buktinya!</a></h1>

                            </div>
                            <div class="entry-excerpt">
                                Liputan6.com, Jakarta Tahukah kamu peran penting mekanik sangat vital dalam dunia industri
                                otomotif. Bagaimana tidak, saat motor kamu sedang rusak atau butuh perawatan peran
                                mekaniklah yang bisa memberikan solusi semua itu. Servis atau tune up pun dilakukan, bahkan
                                mereka tak sungkan akan menginformasikan mengenai hal yang perlu dlakukan agar performa
                                motor kamu kembali sempurna.</div>
                        </div>
                    </article> <!-- end article -->
                </div> <!-- end wrapper -->
            </div> <!-- end row -->


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

            <div id="preloader">
                <div id="loader"></div>
            </div>

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