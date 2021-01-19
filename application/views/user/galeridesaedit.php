<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Galeri</h1>
    </div>

    <?= $this->session->flashdata('message') ?>
    <div class="col-lg-10">
        <?php echo form_open_multipart('user/galeridesaedit/' . $galeri_desa['id']) ?>

        <input type="hidden" class="form-control" id="id" name="id" value="<?= $galeri_desa['id'] ?>">
        <input type="hidden" class="form-control" id="old_image" name="old_image" value="<?= $galeri_desa['image'] ?>">

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $galeri_desa['nama'] ?>">
                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $galeri_desa['alamat'] ?>">
                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="jenis_galeri_desa" class="col-sm-2 col-form-label">Jenis</label>
            <div class="col-sm-10">
                <select class="form-control" id="" name="jenis_galeri_desa">
                    <?php foreach ($jenis_galeri_desa as $p) : ?>
                        <option value="<?= $p['id'] ?>" <?= ($p['id'] == $galeri_desa['jenis_galeri_desa_id']) ? 'selected="selected"' : '' ?>> <?= $p['jenis'] ?> </option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('jenis_galeri_desa', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="deskripsi_galeri" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="row ml-3">
                <textarea rows="10" class="col-sm-10 form-control" id="deskripsi_galeri" name="deskripsi_galeri"><?= $galeri_desa['deskripsi'] ?></textarea>
                <?= form_error('deskripsi_galeri', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">Gambar</div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="<?= base_url('assets/img/galeri/') . $galeri_desa['image'] ?>" class="img-thumbnail">
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
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>
        </form>
    </div>
</div>

</div>