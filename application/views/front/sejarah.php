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
                    <li><a href="<?= base_url('front/galeri') ?>" title="galeri">Galeri</a></li>
                    <li><a href="<?= base_url('front/sejarah') ?>" title="sejarah">Sejarah</a></li>
                    <li><a href="<?= base_url('front/lokasi') ?>" title="lokasi">Lokasi</a></li>
                    <li><a href="<?= base_url('front/galeridesa') ?>" title="galeridesa">Galeri Desa</a></li>
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


    <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="<?= base_url('assets_front/'); ?>images/portfolio/12.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>
        <div class="testimonials-wrap" data-aos="fade-up">

            <div class="row section-header" data-aos="fade-up">
                <div class="col-full">
                    <h3 data-num="02" class="subhead" style="color: white;">Sejarah</h3>
                    <h1 class="display-1" style="color: white;">
                        Sejarah Desa Petulu
                    </h1>
                </div>
            </div>

            <div class="row testimonials">

                <div class="row services-list block-1-3 block-m-1-2 block-tab-full" style="margin-left: 270px;">

                    <iframe width="660" height="415" src="https://www.youtube.com/embed/TNKzQMnT978" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div> <!-- end services-list -->

            </div> <!-- end testimonials -->

        </div> <!-- end testimonials-wrap -->

    </section> <!-- end s-works -->