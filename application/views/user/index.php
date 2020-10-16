<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard </h1>
    </div>

    <?= $this->session->flashdata('message') ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a type="button" class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#chartModal">
                Tampilkan Chart
            </a>
        </div>
        <div class="card-body">
            <h4 class="text-primary"><b> <?= (isset($periode)) ? $periode : '' ?></b></h4>
            <p class="text-primary"><b> <?= (isset($subtitle)) ? $subtitle : '' ?></b></p>
            <div id="chartPengunjung"></div>
        </div>
    </div>
</div>

</div>


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
                <?php echo form_open_multipart('user/index/') ?>
                <div class="form-group row">
                    <label for="periode" class="col-sm-4 col-form-label">Periode</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="" name="periode">

                            <option value="Harian" <?= ("Harian" == set_value('periode')) ? 'selected="selected"' : '' ?>> Harian </option>
                            <option value="Bulanan" <?= ("Bulanan" == set_value('periode')) ? 'selected="selected"' : '' ?>> Bulanan </option>
                            <option value="Tahunan" <?= ("Tahunan" == set_value('periode')) ? 'selected="selected"' : '' ?>> Tahunan </option>

                        </select>
                        <?= form_error('periode', '<small class="text-danger pl-3">', '</small>'); ?>
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