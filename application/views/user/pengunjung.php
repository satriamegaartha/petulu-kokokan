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
                    <a href=" <?= base_url('user/pengunjungadd/') ?>" class="btn btn-sm btn-primary float-right">Tambah Data</a>
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