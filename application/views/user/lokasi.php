<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Lokasi</h1>
    </div>

    <?= $this->session->flashdata('message') ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="m-0 font-weight-bold text-primary"><?= 'Desa ' . $lokasi['desa'] . ', Kecamatan ' . $lokasi['kecamatan'] ?></h5>
                    <h5 class="m-0 font-weight-bold text-primary"><?= 'Kabupaten ' .  $lokasi['kabupaten'] . ', Provinsi ' . $lokasi['provinsi'] ?></h5>
                </div>
                <div class="col-md-6">
                    <a class="btn btn-warning btn-sm float-right" href="<?php echo base_url('user/lokasiedit/') . $lokasi['id'] ?>">Edit Data lokasi</a>
                </div>
            </div>
            <h6 class="mt-2 mb-0"><span class="far fa-calendar-alt mr-2"></span><?= date('d F Y', strtotime($lokasi['date'])) ?><span class="fa fa-user mr-2 ml-4"></span><?= $lokasi['nama']; ?></h6>
        </div>
        <div class="card-body">
            <div id="googleMap" style="width:100%;height:380px;"></div>
            <!-- <p><strong>Provinsi : </strong><?php // echo $lokasi['provinsi']; 
                                                ?></p>
            <p><strong>Kabupaten : </strong><?php // echo $lokasi['kabupaten']; 
                                            ?></p>
            <p><strong>Kecamatan : </strong><?php // echo $lokasi['kecamatan']; 
                                            ?></p>
            <p><strong>Desa : </strong><?php // echo $lokasi['desa']; 
                                        ?></p> -->
        </div>
    </div>
</div>

</div>










<!-- Menyisipkan library Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>

<script>
    // fungsi initialize untuk mempersiapkan peta
    function initialize() {
        var propertiPeta = {
            // center: new google.maps.LatLng(-8.491532, 115.274563),
            center: new google.maps.LatLng(<?= floatval($lokasi['latitude']) ?>, <?= floatval($lokasi['longitude']) ?>),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
    }

    // event jendela di-load  
    google.maps.event.addDomListener(window, 'load', initialize);
</script>