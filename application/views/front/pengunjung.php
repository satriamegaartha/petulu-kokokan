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
                <a class="site-logo" href="<?= base_url('front') ?>"><img src="<?= base_url('assets_front/'); ?>images/logo.svg" alt="Homepage"></a>
            </div>

            <nav class="header-nav-wrap">
                <ul class="header-nav">
                    <li><a href="<?= base_url('front') ?>" title="home">Home</a></li>
                    <li><a href="<?= base_url('front/galeri') ?>" title="galeri">Galeri</a></li>
                    <li><a href="<?= base_url('front/sejarah') ?>" title="sejarah">Sejarah</a></li>
                    <li><a href="<?= base_url('front/lokasi') ?>" title="lokasi">Lokasi</a></li>
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
                <h3 data-num="03" class="subhead">Data Pengunjung</h3>
                <h1 class="display-1">
                    <!-- Pengunjung Desa Wisata Kokokan banyak loh. Yuk kita lihat grafik dibawah. -->
                </h1>
                <p class="lead">

                    <?php echo form_open_multipart('front/pengunjung/') ?>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label for="periode" class="col-form-label">
                                    <h5>Periode</h5>
                                </label>
                                <div class="" style="margin-left: 20px;">
                                    <select class="form-control" id="" name="periode">

                                        <option value="Harian" <?= ("Harian" == set_value('periode')) ? 'selected="selected"' : '' ?>> Harian </option>
                                        <option value="Bulanan" <?= ("Bulanan" == set_value('periode')) ? 'selected="selected"' : '' ?>> Bulanan </option>
                                        <option value="Tahunan" <?= ("Tahunan" == set_value('periode')) ? 'selected="selected"' : '' ?>> Tahunan </option>

                                    </select>
                                    <?= form_error('periode', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group row">
                                <label for="provinsi" class="col-form-label">
                                    <h5>Provinsi</h5>
                                </label>
                                <div class="" style="margin-left: 20px;">
                                    <select class="form-control" id="" name="provinsi">
                                        <option value="All" <?= ('All' == set_value('provinsi')) ? 'selected="selected"' : '' ?>> Seluruh Provinsi </option>
                                        <?php foreach ($provinsi as $p) : ?>
                                            <option value="<?= $p['id'] ?>" <?= ($p['id'] == set_value('provinsi')) ? 'selected="selected"' : '' ?>> <?= $p['nama_provinsi'] ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group row">
                                <label for="tanggal_awal" class=" col-form-label">
                                    <h5>Tanggal Awal</h5>
                                </label>
                                <div class="" style="margin-left: 20px;">
                                    <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal" value="<?= set_value('tanggal_awal') ?>">
                                    <?= form_error('tanggal_awal', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label for="tanggal_akhir" class="col-form-label">
                                    <h5>Tanggal Akhir</h5>
                                </label>
                                <div class="" style="margin-left: 20px;">
                                    <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" value="<?= set_value('tanggal_akhir') ?>">
                                    <?= form_error('tanggal_akhir', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <hr>
                    <?= (isset($periode)) ? $periode : '' ?></b> <?= (isset($nama_provinsi)) ? '(' . $nama_provinsi . ')' : '(Seluruh Provinsi)' ?>
                    <br>
                    <?= (isset($subtitle)) ? $subtitle : '' ?>
                </p>

            </div>
        </div>

        <div class="row services-list block-1-3 block-m-1-2 block-tab-full">

            <div id="chartPengunjung"></div>
        </div>

    </section>