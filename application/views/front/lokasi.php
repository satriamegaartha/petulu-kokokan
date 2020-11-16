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

            <div class="row home-content__main">

                <h1>
                    Desa Wisata Kokokan (Bangau) <br>
                    Desa Petulu Ubud
                </h1>

                <!-- <div class="home-content__button">
                    <a href="#about" class="smoothscroll btn btn-animatedbg">
                        More About Us
                    </a>
                </div> -->


            </div> <!-- end home-content__main -->

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    Scroll
                </a>
            </div>

        </div> <!-- end home-content -->

    </section> <!-- end s-home -->

    <section id="works" class="s-works target-section">
        <div class="testimonials-wrap" data-aos="fade-up">

            <div class="row section-header" data-aos="fade-up">
                <div class="col-full">
                    <h3 data-num="02" class="subhead">Lokasi</h3>

                </div>
            </div>

            <div class="row testimonials">

                <div class="col-full testimonials__slider">

                    <div class="testimonials__slide">
                        <!-- <span class="testimonials__icon"></span> -->
                        <p>Burung kokokan berada di Desa Petulu, Ubud. Ya Ubud selalu saja memiliki hal menarik untuk dinikmati.</p>

                    </div> <!-- end testimonials__slide -->

                    <div class="testimonials__slide">
                        <!-- <span class="testimonials__icon"></span> -->
                        <p> Keberadaan burung bangau atau kokokan, terasa menyatu dengan kehidupan warga dan alam, sehingga jarang bisa ditemukan di tempat lainnya, dan membuatnya layak menjadi salah satu tujuan wisata unik di Bali</p>
                    </div> <!-- end testimonials__slide -->


                </div> <!-- end testimonials__slider -->

                <div class="row services-list block-1-3 block-m-1-2 block-tab-full">

                    <div id="googleMap" style="width:100%;height:480px;"></div>

                </div> <!-- end services-list -->

            </div> <!-- end testimonials -->

        </div> <!-- end testimonials-wrap -->

    </section> <!-- end s-works -->