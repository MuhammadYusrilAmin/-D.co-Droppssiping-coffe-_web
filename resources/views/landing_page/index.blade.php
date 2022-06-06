<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>D.CO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('assets/landing/img/logo.png')}}" rel="icon">
    <link href="{{asset('assets/landing/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('assets/landing/lib/bootstrap/css/bootstrap.min.css')}}" rel=" stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('assets/landing/lib/font-awesome/css/font-awesome.min.css')}}" rel=" stylesheet">
    <link href="{{asset('assets/landing/lib/animate/animate.min.css')}}" rel=" stylesheet">
    <link href="{{asset('assets/landing/lib/ionicons/css/ionicons.min.css')}}" rel=" stylesheet">
    <link href="{{asset('assets/landing/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel=" stylesheet">
    <link href="{{asset('assets/landing/lib/lightbox/css/lightbox.min.css')}}" rel=" stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('assets/landing/css/style.css')}}" rel=" stylesheet">
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container-fluid">
            <div id="logo" class="pull-left">
                <h2>
                    <img src="{{asset('assets/landing/img/logo.png')}}" alt="Logo" height="50" width="50">
                    <a href="#intro" class="scrollto"><i>Dropshipper Coffee</i></a>
                </h2>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#intro"><img src="{{asset('assets/landing/img/logo.png" alt="" title="" /></a>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Home</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#services">Fitur</a></li>
                    <li><a href="#portfolio">Produk</a></li>
                    <li><a href="#team">Tim</a></li>
                    <li><a href="#login">Login?</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
        <div class="intro-container">
            <?php
            ?>
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active image-carousel">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Apa sih D.CO itu?</h2>
                                <p>Dropshipper Coffee adalah jalan terbaik untuk meningkatkan bisnis online anda</p>
                                <a href="#about" class="btn-get-started scrollto">Mulai</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #intro -->

    <main id="main">


        <!--==========================
      About Us Section
    ============================-->
        <section id="about">
            <div class="container">
                <header class="section-header">
                    <h3>Tentang Kami</h3>
                    <p>Kami hadir untuk anda, para reseller yang menginginkan cara terbaik dalam urusan bisnis. Lewat platform yang akan terus dikembangkan sesuai kemajuan teknologi, D.CO akan selalu berusaha untuk menjadi <b>jawaban dalam meningkatkan bisnis anda.</b>
                        Anda tidak perlu pusing lagi dalam perencanaan produksi, packing dan pengiriman barang karena segala hal akan diurus oleh D.CO. Selayaknya teman, D.CO ingin tumbuh bersama dengan para reseller. Kami ada untuk menyebarkan energi positif dan memberikan semangat dalam memulai langkah untuk mewujudkan mimpi jadi kenyataan.
                    </p>
                </header>
                <div class="row about-cols">
                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{asset('assets/landing/img/about-mission.jpg')}}" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Misi</a></h2>
                            <p>a. Memberikan produk dropship yang ter-update <br />
                                b. Menjaga kualitas produk dari competitor <br />
                                c. Kepuasan pelanggan adalah prioritas utama</p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{asset('assets/landing/img/about-plan.jpg')}}" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-list-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Tujuan</a></h2>
                            <p>
                                Reseller dapat memulai buka toko online sendiri dan berjualan tanpa perlu memikirkan modal awal. Dapat bekerja dimana saja dan kapan saja. Semua bisa dilakukan lewat aplikasi D.CO”
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{asset('assets/landing/img/about-vision.jpg')}}" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Visi</a></h2>
                            <p>“Menjadi platform Dropshipper nomor 1 di Indonesia”</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #about -->

        <!--==========================
      Facts Section
    ============================-->
        <section id="facts" class="wow fadeIn">
            <div class="container">
                <header class="section-header">
                    <h3>Milestone</h3>
                </header>
                <div class="row counters">

                </div>
                <div class="facts-img">
                    <img src="{{asset('assets/landing/img/milestone.png')}}" alt="" class="img-fluid" height="1080">
                </div>
            </div>
        </section><!-- #facts -->


        <!--==========================
      Services Section
    ============================-->
        <section id="services">
            <div class="container">
                <header class="section-header wow fadeInUp">
                    <h3>Fitur Terbaik</h3>
                </header>
                <div class="row">
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                        <h4 class="title"><a href="">Verifikasi Stok</a></h4>
                        <p class="description">Memeriksa stok secara online 24 jam. Dapatkan info stok tanpa harus menunggu balasan CS</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
                        <h4 class="title"><a href="">Resi Otomatis</a></h4>
                        <p class="description">Order dan duduk manis, kami akan kirim resi via sms / WhatsApp secara otomatis</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-paper-outline"></i></div>
                        <h4 class="title"><a href="">Tracking Order</a></h4>
                        <p class="description">Barang sudah dikemas / dikirim belum ya? Semua bisa di lacak di sistem kami</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        <h4 class="title"><a href="">Laporan</a></h4>
                        <p class="description">Dapat membuat laporan transaksi penjualan per bulan</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                        <h4 class="title"><a href="">Katalog Produk</a></h4>
                        <p class="description">Katalog produk berisi gambar dan informasi produk agar konsumen dapat melakukan pemesanan barang secara online</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-people-outline"></i></div>
                        <h4 class="title"><a href="">Multi-user</a></h4>
                        <p class="description">Aplikasi ini bisa digunakan untuk lebih dari satu pengguna</p>
                    </div>
                </div>
            </div>
        </section><!-- #services -->

        <!--==========================
      Call To Action Section
    ============================-->
        <section id="call-to-action" class="wow fadeIn">
            <div class="container text-center">
                <h3>Mau bergabung dengan kami?</h3>
                <a class="cta-btn" href="#">Klik Disini!</a>
            </div>
        </section><!-- #call-to-action -->

        <!--==========================
      Skills Section
    ============================-->
        <section id="skills">
            <div class="container">
                <header class="section-header">
                    <h3>Penjualan Kopi Tahunan</h3>
                </header>
                <div class="skills-content">
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            <span class="skill">2017 <i class="val">60%</i></span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            <span class="skill">2018 <i class="val">70%</i></span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                            <span class="skill">2021 <i class="val">85%</i></span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <span class="skill">2022 <i class="val">90%</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--==========================
      Portfolio Section
    ============================-->
        <section id="portfolio" class="section-bg">
            <div class="container">
                <header class="section-header">
                    <h3 class="section-title">Produk Kami</h3>
                </header>
                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Kopi Arabica</li>
                            <li data-filter=".filter-card">Kopi Beras</li>
                            <li data-filter=".filter-web">Kopi Robusta</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{asset('assets/landing/img/produk/Kopi Arabica.png')}}" class="img-fluid" alt="">
                                <a href="img/produk/Kopi Arabica.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="#">Kopi Arabica</a></h4>
                                <p>Kopi Arabica</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{asset('assets/landing/img/produk/Kopi Robusta.png')}}" class="img-fluid" alt="">
                                <a href="img/produk/Kopi Robusta.png" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="#">Kopi Robusta</a></h4>
                                <p>Kopi Robusta</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{asset('assets/landing/img/produk/Kopi Beras.png')}}" class="img-fluid" alt="">
                                <a href="img/produk/Kopi Beras.png" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="#">Kopi Beras</a></h4>
                                <p>Kopi Beras</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #portfolio -->

        <!--==========================
      Clients Section
    ============================-->
        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <header class="section-header">
                    <h3>Mitra Kami</h3>
                </header>
                <div class="section-header">
                    <img src="{{asset('assets/landing/img/sekarwangi.png')}}" alt="" width="420" height="160">
                </div>
            </div>
        </section><!-- #clients -->

        <!--==========================
      Clients Section
    ============================-->
        <section id="testimonials" class="section-bg wow fadeInUp">
            <div class="container">
                <header class="section-header">
                    <h3>Testimoni Reseller</h3>
                </header>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="{{asset('assets/landing/img/testimonial-2.jpg')}}" class="testimonial-img" alt="">
                        <h3>Ariana</h3>
                        <h4>Ibu Rumah Tangga</h4>
                        <p>
                            <img src="{{asset('assets/landing/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                            Trafik penjualan meningkat pesat di bulan Ramadhan.
                            <img src="{{asset('assets/landing/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{asset('assets/landing/img/testimonial-1.jpg')}}" class="testimonial-img" alt="">
                        <h3>Daniel</h3>
                        <h4>Designer</h4>
                        <p>
                            <img src="{{asset('assets/landing/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                            Kita ga perlu repot ngurus produksi yang bikin pusing, gaji karyawan dll. Semua udah diurus sama tim dan mitra dan kita tinggal siapin konsep penjualan.
                            <img src="{{asset('assets/landing/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{asset('assets/landing/img/testimonial-3.jpg')}}" class="testimonial-img" alt="">
                        <h3>Callista</h3>
                        <h4>Pemilik Toko</h4>
                        <p>
                            <img src="{{asset('assets/landing/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                            Kualitas produk kopinya bagus banget. Karena plikasi ini jadi gampang ngurusin penjualan.
                            <img src="{{asset('assets/landing/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- #testimonials -->

        <!--==========================
      Team Section
    ============================-->
        <section id="team">
            <div class="container">
                <div class="section-header wow fadeInUp">
                    <h3>Tim Pengembang</h3>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="{{asset('assets/landing/img/tim1.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Tegar Karunia I.</h4>
                                    <span>Product Manager</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="{{asset('assets/landing/img/tim2.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>M. Yusril Amin</h4>
                                    <span>Web Developer</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="{{asset('assets/landing/img/tim3.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Inggrid Amalia S.</h4>
                                    <span>Mobile Developer</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="{{asset('assets/landing/img/tim4.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Winda Budi L.</h4>
                                    <span>Web Developer</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="{{asset('assets/landing/img/tim5.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Istiqomah Dwi S.</h4>
                                    <span>Quality Assurance</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #team -->

        <!--==========================
      Contact Section
    ============================-->
        <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h3>Kontak Kami</h3>
                </div>
                <div class="row contact-info">
                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Alamat</h3>
                            <address>Ledokombo, Jember, Jawa Timur</address>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Telepon</h3>
                            <p><a href="tel:+155895548855">+62 851 7169 1521</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">dropshippercoffee@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="form">
                    <div id="sendmessage">Pesan Anda telah dikirim. Terima kasih!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Tulis sesuatu untuk kami" placeholder="Pesan"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                    </form>
                </div>
            </div>
        </section><!-- #contact -->
    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>Dropshipper Coffee</h3>
                        <p>D.CO merupakan aplikasi dropship kopi berbasis website dan mobile yang memudahkan pengguna untuk memulai usaha reseller. Dengan aplikasi ini, reseller dapat mengirimkannya langsung kepada pelanggan – hanya dengan beberapa klik.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Tautan kami</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Tentang Kami</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Fitur</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Persyaratan Layanan</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Kebijakan</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Kontak Kami</h4>
                        <p>
                            Ledokombo <br>
                            Jember<br>
                            Jawa Timur <br>
                            <strong>Telepon:</strong> +62 851 7169 1521<br>
                            <strong>Email:</strong> dropshippercoffee@gmail.com<br>
                        </p>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Buletin kami</h4>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Dropshipper Coffee</strong>. All Rights Reserved
            </div>
            <div class="credits"></div>
        </div>
    </footer><!-- #footer -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{asset('assets/landing/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/landing/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('assets/landing/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/landing/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/landing/lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{asset('assets/landing/lib/superfish/superfish.min.js')}}"></script>
    <script src="{{asset('assets/landing/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/landing/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/landing/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/landing/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/landing/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/landing/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('assets/landing/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{asset('assets/landing/contactform/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('assets/landing/js/main.js')}}"></script>

</body>

</html>