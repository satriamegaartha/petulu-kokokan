<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="row">

            <nav class="header-nav-wrap" style="margin-left: -170px;">
                <ul class="header-nav">
                    <li><a href="<?= base_url('front') ?>" title="home">Home</a></li>
                    <li><a href="<?= base_url('front/galeridesa') ?>" title="galeridesa">Galeri Desa</a></li>
                    <li><a href="<?= base_url('front/sejarah') ?>" title="sejarah">Sejarah</a></li>
                    <li><a href="<?= base_url('front/lokasi') ?>" title="lokasi">Lokasi</a></li>
                    <li><a href="<?= base_url('front/galeri') ?>" title="galeri">Galeri Burung</a></li>
                    <li><a href="<?= base_url('front/pengunjung') ?>" title="pengunjung">Pengunjung</a></li>
                    <li><a href="<?= base_url('auth') ?>" title="home">Halaman Admin</a></li>
                </ul>
            </nav> <!-- end header-nav-wrap -->

            <a class="header-menu-toggle" href="#0">
                <span class="header-menu-icon"></span>
            </a>

        </div> <!-- end row -->

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="<?= base_url('assets_front/'); ?>images/portfolio/sawah.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main" style="padding-right: 0;">
                <div class="col-md-6">
                    <h1>
                        Desa Wisata Kokokan<br>
                        (Bangau)
                        <hr style="    position: relative;
                        top: 10px;
                        border: none;
                        height: 8px;
                        background: white;
                        margin-bottom: 25px;">
                        Desa Petulu, Ubud
                    </h1>
                </div>
                <div class="col-md-6" style="margin-top: 50px">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_fRjwwnS2H0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- <div class="home-content__button">
                    <a href="#about" class="smoothscroll btn btn-animatedbg">
                        More About Us
                    </a>
                </div> -->

                <!-- <div class="home-content__video" style="margin-left: 100px;"> -->
                <!-- <a class="video-link" href="https://player.vimeo.com/video/117310401?color=01aef0&title=0&byline=0&portrait=0" data-lity>
                        <span class="video-icon"></span>
                        <span class="video-text">Play Video</span>
                    </a> -->

                <!-- </div> -->
            </div> <!-- end home-content__main -->

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    Scroll
                </a>
            </div>

        </div> <!-- end home-content -->

    </section> <!-- end s-home -->

    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 data-num="01" class="subhead">Galeri</h3>
                <h1 class="display-1 ">
                    Desa Wisata Kokokan
                </h1>

                <div class="row testimonials" style="margin:0;">
                    <div class="col-full testimonials__slider">
                        <div class="testimonials__slide">
                            <p>Ubud selalu saja memiliki hal menarik untuk dinikmati, selain sebagai desa seni keberadaan Desa Petulu di Ubud, menjadi tujuan wisata unik yang satu-satunya desa sebagai tempat koloni tetap untuk habitat burung bangau atau dalam bahasa Bali disebut juga Kokokan.</p>
                        </div>
                        <div class="testimonials__slide">

                            <p>Burung-burung tersebut hidup dengan damai di desa ini tanpa ada yang mengganggu, jumlahnya sekarangnya ratusan, bahkan sampai ribuan, setiap harinya terlihat aktifitas burung tersebut keluar masuk desa, namun pada sore harinya mereka berkumpul kembali ke desa Petulu.</p>
                        </div>
                    </div>
                </div>

                <div style="margin-left: 100px;">
                    <a href="<?= base_url('front/galeridesa') ?>" class="btn btn-animatedbg">
                        <div style="color: black;">
                            Lihat Seluruh Galeri
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <div class="portfolio block-1-4 block-m-1-3 block-tab-1-2 collapse">

            <?php foreach ($galeri_desa as $g) : ?>

                <div class="col-block item-folio" data-aos="fade-up" style="padding: 8px;">
                    <div class="item-folio__thumb">
                        <a href="<?= base_url('assets/img/galeri/') . $g['image'] ?>" class="thumb-link" title="" data-size="1050x700">
                            <img src="" srcset="<?= base_url('assets/img/galeri/thumbnail/') . $g['image'] ?> 1x" alt="">
                        </a>
                    </div>

                    <div class="item-folio__text">
                        <h3 class="item-folio__title">
                            <?= $g['nama']; ?>
                        </h3>
                        <!-- <p class="item-folio__cat">
                            <?php // $g['jenis']; 
                            ?>
                        </p> -->
                    </div>

                    <a href="#" class="item-folio__project-link" title="Project link">
                        Detail
                    </a>

                    <div class="item-folio__caption">
                        <p><?= $g['alamat']; ?></p>
                    </div>
                </div> <!-- end item-folio -->
            <?php endforeach; ?>




        </div>
        <!-- end portfolio -->

    </section>

    <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="<?= base_url('assets_front/'); ?>images/portfolio/ubud.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>
        <div class="testimonials-wrap" data-aos="fade-up">

            <div class="row section-header" data-aos="fade-up">
                <div class="col-full">
                    <h3 data-num="02" class="subhead" style="color: white;">Lokasi</h3>
                    <h1 class="display-1" style="color: white;">
                        Ih bagus banget, mau liat tapi dimana ya?
                    </h1>
                </div>
            </div>

            <div class="row testimonials">

                <div class="col-full testimonials__slider">

                    <div class="testimonials__slide">
                        <!-- <span class="testimonials__icon"></span> -->
                        <p style="color: white;">Burung kokokan berada di Desa Petulu, Ubud. Ya Ubud selalu saja memiliki hal menarik untuk dinikmati.</p>

                    </div> <!-- end testimonials__slide -->

                    <div class="testimonials__slide">
                        <!-- <span class="testimonials__icon"></span> -->
                        <p style="color: white;"> Keberadaan burung bangau atau kokokan, terasa menyatu dengan kehidupan warga dan alam, sehingga jarang bisa ditemukan di tempat lainnya, dan membuatnya layak menjadi salah satu tujuan wisata unik di Bali</p>
                    </div> <!-- end testimonials__slide -->


                </div> <!-- end testimonials__slider -->

                <div class="row services-list block-1-3 block-m-1-2 block-tab-full">

                    <div id="googleMap" style="width:100%;height:480px;"></div>

                </div> <!-- end services-list -->

            </div> <!-- end testimonials -->

        </div> <!-- end testimonials-wrap -->

    </section> <!-- end s-works -->

    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 data-num="03" class="subhead">Galeri Burung</h3>
                <h1 class="display-1 ">
                    Burung Kokokan
                </h1>

                <!-- <div class="row testimonials" style="margin:0;">
                    <div class="col-full testimonials__slider">
                        <div class="testimonials__slide">
                            <p>Ubud selalu saja memiliki hal menarik untuk dinikmati, selain sebagai desa seni keberadaan Desa Petulu di Ubud, menjadi tujuan wisata unik yang satu-satunya desa sebagai tempat koloni tetap untuk habitat burung bangau atau dalam bahasa Bali disebut juga Kokokan.</p>
                        </div>
                        <div class="testimonials__slide">

                            <p>Burung-burung tersebut hidup dengan damai di desa ini tanpa ada yang mengganggu, jumlahnya sekarangnya ratusan, bahkan sampai ribuan, setiap harinya terlihat aktifitas burung tersebut keluar masuk desa, namun pada sore harinya mereka berkumpul kembali ke desa Petulu.</p>
                        </div>
                    </div>
                </div> -->

                <div style="margin-left: 100px;">
                    <a href="<?= base_url('front/galeri') ?>" class="btn btn-animatedbg">
                        <div style="color: black;">
                            Lihat Seluruh Galeri
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <!-- <div class="portfolio block-1-4 block-m-1-3 block-tab-1-2 collapse"> -->
        <div class="portfolio block-m-1-3 block-tab-1-2 collapse">

            <div class="container">
                <div style="margin-left:130px;">
                    <?php foreach ($galeri as $g) : ?>
                        <div class="col-md-3" style="margin-bottom: 35px; padding:0;">
                            <div class="col-block item-folio" data-aos="fade-up">
                                <div class="item-folio__thumb">
                                    <a href="<?= base_url('assets/img/galeri/') . $g['image'] ?>" class="thumb-link" title="" data-size="444x700">
                                        <img src="" srcset="<?= base_url('assets/img/galeri/thumbnail/') . $g['image'] ?> 1x" alt="">
                                    </a>
                                </div>

                                <div class="item-folio__text">
                                    <h3 class="item-folio__title">
                                        <?= $g['nama']; ?>
                                    </h3>
                                    <p class="item-folio__cat">
                                        <?= $g['jenis']; ?>
                                    </p>
                                </div>

                                <a href="#" class="item-folio__project-link" title="Project link">
                                    Detail
                                </a>

                                <div class="item-folio__caption">
                                    <p><?= $g['deskripsi']; ?></p>
                                </div>
                            </div> <!-- end item-folio -->
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>


        </div>
        <!-- end portfolio -->

    </section>

    <!-- services
    ================================================== -->
    <!-- <section id="works" class="s-works target-section"> -->
    <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="<?= base_url('assets_front/'); ?>images/portfolio/kuning.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>
        <div class="row section-header" data-aos="fade-up" style="margin-top: 40px;">
            <div class=" col-full">
                <h3 data-num="04" class="subhead" style="color: white;">Data Pengunjung</h3>
                <h1 class="display-1" style="color: white;">
                    Pengunjung Desa Wisata Kokokan banyak loh. Yuk kita lihat grafik dibawah.
                </h1>
                <p class="lead" style="color: white;">
                    <?= $subtitle; ?>
                    <div style="margin-left: 100px;">
                        <a href="<?= base_url('front/pengunjung') ?>" class="btn btn-animatedbg">
                            <div>
                                Lihat Detail Data Pengunjung
                            </div>
                        </a>
                    </div>
                    <hr>
                </p>

            </div>
        </div>

        <div class="row services-list block-1-3 block-m-1-2 block-tab-full" style="margin-bottom: 40px;">

            <div id="chartPengunjung"></div>
        </div> <!-- end services-list -->

    </section> <!-- end s-services -->