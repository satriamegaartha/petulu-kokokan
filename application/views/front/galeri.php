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

    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 data-num="03" class="subhead">Galeri Burung</h3>

            </div>
        </div>
        <div class="row">
            <?php echo form_open_multipart('front/galeri/') ?>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group row">
                        <label for="jenis_burung" class="col-form-label">
                            <h5>Jenis Burung</h5>
                        </label>
                        <div class="" style="margin-left: 20px;">
                            <select class="form-control" id="" name="jenis_burung">
                                <option value="All" <?= ('All' == set_value('jenis_burung')) ? 'selected="selected"' : '' ?>> Seluruh Jenis</option>
                                <?php foreach ($jenis_burung as $p) : ?>
                                    <option value="<?= $p['id'] ?>" <?= ($p['id'] == set_value('jenis_burung')) ? 'selected="selected"' : '' ?>> <?= $p['jenis'] ?> </option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('jenis_burung', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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