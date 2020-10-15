<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Sejarah</h1>
    </div>

    <?= $this->session->flashdata('message') ?>
    <div class="col-lg-10">
        <?php echo form_open_multipart('user/sejarahedit/' . $sejarah['id']) ?>

        <input type="hidden" class="form-control" id="id" name="id" value="<?= $sejarah['id'] ?>">

        <div class="form-group row">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $sejarah['judul'] ?>">
                <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="row ml-3">
                <textarea rows="10" class="col-sm-10 form-control" id="deskripsi" name="deskripsi"><?= $sejarah['deskripsi'] ?></textarea>
                <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>


        <div class="form-group row">
            <div class="col-sm-2">Gambar</div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="<?= base_url('assets/img/galeri/') . $sejarah['image'] ?>" class="img-thumbnail">
                    </div>
                    <div class="col-sm-5">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row justify-content-end">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Edit sejarah</button>
            </div>
        </div>
        </form>
    </div>
</div>

</div>