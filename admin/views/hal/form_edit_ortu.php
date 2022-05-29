<div class="modal-header">
    <h5 class="modal-title font-weight-bolder text-primary text-gradient" id="exampleModalLabel">Edit
        Jadwal</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <form method="POST" action="controllers/jadwalController.php">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tanggal :</label>
            <input type="text" class="form-control" name="tgl" value="<?= $detailTa['tgl']?>" id="recipient-name">
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="recipient-name" class="col-form-label">Jenjang :</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="kategori" value="SMP" <?= $detailTa['kategori'] == 'SMP' ? 'checked' : ''?> id="customRadio1">
                        <label class="custom-control-label" for="customRadio1">SMP</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="kategori" value="SMA" id="customRadio2" <?= $detailTa['kategori'] == 'SMA' ? 'checked' : ''?>>
                        <label class="custom-control-label" for="customRadio2">SMA</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="recipient-name" class="col-form-label">Info :</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="info" value="true" id="customRadio1" <?= $detailTa['info'] == 'true' ? 'checked' : ''?>>
                        <label class="custom-control-label" for="customRadio1">Show</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="info" value="false" id="customRadio2" <?= $detailTa['info'] == 'false' ? 'checked' : ''?>>
                        <label class="custom-control-label" for="customRadio2">Hidden</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kuota :</label>
            <input type="text" class="form-control" name="kuota" id="recipient-name" value="<?= $detailTa['kuota']?>">
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tahunajar :</label>
            <select name="idtahunajar" class="form-control" id="recipient-name">
                <option selected>Pilih</option>
                <?php foreach($dataTahunajar as $row):?>
                    <?php if($detailTa['idtahunajar'] == $row['id_tahun_ajar']):?>
                        <option value="<?= $row['id_tahun_ajar']?>" selected><?= $row['tahun_ajar']?></option>
                    <?php else:?>
                        <option value="<?= $row['id_tahun_ajar']?>">
                            <?= $row['tahun_ajar']?><?= $row['status'] == 'active' ? ' - active' : ''?>
                        </option>
                    <?php endif;?>
                <?php endforeach;?>
            </select>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="proses" value="ubah" class="btn bg-gradient-primary">Edit</button>
            <input type="hidden" name="idx" value="<?= $detailTa['id_jadwal']?>" />
        </div>
    </form>
</div>