<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Galeri</h1>
    </div>

    <?= $this->session->flashdata('message') ?>
    <div class="col-lg-10">
        <?php echo form_open_multipart('user/galeriadd/') ?>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama') ?>">
                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>




        <div class="form-group row">
            <label for="jenis_burung" class="col-sm-2 col-form-label">Jenis Burung</label>
            <div class="col-sm-10">
                <select class="form-control" id="" name="jenis_burung">
                    <?php foreach ($jenis_burung as $p) : ?>
                        <option value="<?= $p['id'] ?>" <?= ($p['id'] == set_value('jenis_burung')) ? 'selected="selected"' : '' ?>> <?= $p['jenis'] ?> </option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('jenis_burung', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="deskripsi_galeri" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <textarea rows="10" class="col-sm-10 form-control" id="deskripsi_galeri" name="deskripsi_galeri"> <?= set_value('deskripsi_galeri') ?></textarea>
                <?= form_error('deskripsi_galeri', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">Gambar</div>
            <div class="col-sm-10">
                <div class="row">
                    <!-- <div class="col-sm-3">
                        <img src="" class="img-thumbnail">
                    </div> -->
                    <div class="col-sm-5">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                </div>
                <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>

        <div class="form-group row justify-content-end">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
</div>

</div>