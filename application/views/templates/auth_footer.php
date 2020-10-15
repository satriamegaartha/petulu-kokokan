<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    <?php if ($this->session->userdata('success')) { ?>
        toastr.success("<?= $this->session->flashdata('success'); ?>")
    <?php } ?>
    <?php if ($this->session->userdata('warning')) { ?>
        toastr.warning("<?= $this->session->flashdata('warning'); ?>")
    <?php } ?>
</script>
</body>

</html>