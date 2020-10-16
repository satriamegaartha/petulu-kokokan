<!-- footer
    ================================================== -->
<footer>
    <div class="row">
        <div class="col-full cl-copyright">
            <span>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </span>
        </div>
    </div>

    <div class="cl-go-top">
        <a class="smoothscroll" title="Back to Top" href="#top"></a>
    </div>
</footer>


<!-- photoswipe background
    ================================================== -->
<div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">

        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title="Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>

    </div>

</div><!-- end photoSwipe background -->


<!-- Java Script
    ================================================== -->
<script src="<?= base_url('assets_front/'); ?>js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets_front/'); ?>js/plugins.js"></script>
<script src="<?= base_url('assets_front/'); ?>js/main.js"></script>



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


</body>