<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pengunjung</h1>
    </div>

    <?= $this->session->flashdata('message') ?>

    <!-- Content Row -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <a type="button" class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#chartModal">
                        Filter
                    </a>
                    <a href=" <?= base_url('user/pengunjungadd/') ?>" class="btn btn-sm btn-primary">Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover" id="datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Provinsi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pengunjung as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= date('d F Y', strtotime($p['tanggal'])) ?></td>
                                    <td><?= $p['jumlah']; ?></td>
                                    <td><?= $p['nama_provinsi']; ?></td>
                                    <td>
                                        <a href=" <?= base_url('user/pengunjungedit/') . $p['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="<?= base_url('user/pengunjungdelete/') . $p['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Data akan dihapus?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->





<!-- Modal -->
<div class="modal fade" id="chartModal" tabindex="-1" aria-labelledby="chartModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="chartModalLabel">Choose Chart Period</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('user/pengunjung/') ?>
                <div class="form-group row">
                    <label for="provinsi" class="col-sm-4 col-form-label">Provinsi</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="" name="provinsi">
                            <option value="All" <?= ('All' == set_value('provinsi')) ? 'selected="selected"' : '' ?>> Seluruh Provinsi </option>
                            <?php foreach ($provinsi as $p) : ?>
                                <option value="<?= $p['id'] ?>" <?= ($p['id'] == set_value('provinsi')) ? 'selected="selected"' : '' ?>> <?= $p['nama_provinsi'] ?> </option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggal_awal" class="col-sm-4 col-form-label">Tanggal Awal</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal" value="<?= set_value('tanggal_awal') ?>">
                        <?= form_error('tanggal_awal', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal_akhir" class="col-sm-4 col-form-label">Tanggal Akhir</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" value="<?= set_value('tanggal_akhir') ?>">
                        <?= form_error('tanggal_akhir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>