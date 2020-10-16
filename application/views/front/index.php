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

            <div class="header-logo">
                <a class="site-logo" href="<?= base_url('assets_front/'); ?>index.html"><img src="<?= base_url('assets_front/'); ?>images/logo.svg" alt="Homepage"></a>
            </div>

            <nav class="header-nav-wrap">
                <ul class="header-nav">
                    <li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll" href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll" href="#services" title="services">Services</a></li>
                    <li><a class="smoothscroll" href="#works" title="works">Works</a></li>
                    <li><a class="smoothscroll" href="#contact" title="contact">Contact</a></li>
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

            <div class="row home-content__main">

                <h1>
                    Desa Wisata Kokokan (Bangau) <br>
                    Desa Petulu Ubud
                </h1>

                <div class="home-content__button">
                    <a href="#about" class="smoothscroll btn btn-animatedbg">
                        More About Us
                    </a>
                </div>


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
                    Buwung Puyuh?
                    Bukan, ini Burung Kokokan :)
                </h1>
            </div>
        </div>

        <div class="portfolio block-1-4 block-m-1-3 block-tab-1-2 collapse">

            <?php foreach ($galeri as $g) : ?>
                <div class="col-block item-folio" data-aos="fade-up">
                    <div class="item-folio__thumb">
                        <a href="<?= base_url('assets/img/galeri/') . $g['image'] ?>" class="thumb-link" title="Lamp" data-size="1050x700">
                            <img src="<?= base_url('assets/img/galeri/') . $g['image'] ?>" srcset="<?= base_url('assets/img/galeri/thumbnail/') . $g['image'] ?> 1x" alt="">
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
            <?php endforeach; ?>


        </div> <!-- end portfolio -->

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


    <!-- services
    ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 data-num="02" class="subhead">What We Do</h3>
                <h1 class="display-1">
                    Our services are tailored to make your business grow and stand out.
                </h1>
                <p class="lead">
                    Quia iusto totam facilis ut atque quidem quis maiores iure. Facilis mollitia enim illo sed et totam commodi. Velit a recusandae sequi consequatur est dolorum. Eaque accusantium praesentium ut omnis. Laboriosam reprehenderit commodi assumenda.
                </p>
            </div>
        </div>

        <div class="row services-list block-1-3 block-m-1-2 block-tab-full">

            <div id="chartPengunjung"></div>
        </div> <!-- end services-list -->

    </section> <!-- end s-services -->