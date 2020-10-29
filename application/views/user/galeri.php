<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Galeri</h1>
    </div>

    <?= $this->session->flashdata('message') ?>

    <!-- Content Row -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="col">
                        <?php echo form_open_multipart('user/galeri/') ?>
                        <div class="col-md-12">
                            <div class="form-group row">

                                <div class="col-sm-3">
                                    <select class="form-control" id="" name="jenis_burung">
                                        <option value="All" <?= ('All' == set_value('jenis_burung')) ? 'selected="selected"' : '' ?>> Seluruh Jenis</option>
                                        <?php foreach ($jenis_burung as $p) : ?>
                                            <option value="<?= $p['id'] ?>" <?= ($p['id'] == set_value('jenis_burung')) ? 'selected="selected"' : '' ?>> <?= $p['jenis'] ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('jenis_burung', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-5">
                                    <button type="submit" class="btn btn-sm btn-info">Submit</button>
                                </div>
                                <div class="col-sm-4">
                                    <a href=" <?= base_url('user/galeriadd/') ?>" class="btn btn-sm btn-primary float-right">Tambah Data</a>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover" id="datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($galeri as $g) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $g['nama']; ?></td>
                                    <td><?= $g['jenis']; ?></td>
                                    <td>
                                        <img src="<?= base_url('assets/img/galeri/thumbnail/') . $g['image'] ?>" class="img-thumbnail" width="224px" height="400px">
                                    </td>
                                    <td>
                                        <a href=" <?= base_url('user/galeriedit/') . $g['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="<?= base_url('user/galeridelete/') . $g['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Data akan dihapus?')">Delete</a>
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