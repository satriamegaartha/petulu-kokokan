<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pengunjung</h1>
    </div>

    <?= $this->session->flashdata('message') ?>
    <div class="col-lg-8">
        <?php echo form_open_multipart('user/pengunjungadd/') ?>
        <div class="form-group row">
            <label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
            <div class="col-sm-10">
                <select class="form-control" id="" name="provinsi">

                    <?php foreach ($provinsi as $p) : ?>
                        <option value="<?= $p['id'] ?>" <?= ($p['id'] == set_value('provinsi')) ? 'selected="selected"' : '' ?>> <?= $p['nama_provinsi'] ?> </option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= set_value('jumlah') ?>">
                <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= set_value('tanggal') ?>">
                <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
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