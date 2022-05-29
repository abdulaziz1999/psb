<div class="modal-header">
    <h5 class="modal-title font-weight-bolder text-primary text-gradient" id="exampleModalLabel">Detail
        Jadwal</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <form method="POST" action="controllers/pembayaranController.php">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">NISN :</label>
            <input type="text" class="form-control" name="nisn" value="<?= $detailTa['nisn']?>" id="recipient-name" disabled>
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Siswa :</label>
            <input type="text" class="form-control" name="nama" value="<?= $detailTa['nama']?>" id="recipient-name" disabled>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="recipient-name" class="col-form-label">Jenjang :</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="jenjang" value="SMP" <?= $detailTa['jenjang'] == 'SMP' ? 'checked' : ''?> id="customRadio1" disabled>
                        <label class="custom-control-label" for="customRadio1">SMP</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="jenjang" value="SMA" id="customRadio2" <?= $detailTa['jenjang'] == 'SMA' ? 'checked' : ''?> disabled>
                        <label class="custom-control-label" for="customRadio2">SMA</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="recipient-name" class="col-form-label">Status Bayar :</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="status_bayar" value="Lunas" id="customRadio1" <?= $detailTa['status_bayar'] == 'Lunas' ? 'checked' : ''?> disabled>
                        <label class="custom-control-label" for="customRadio1">Lunas</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="status_bayar" value="Belum Lunas" id="customRadio2" <?= $detailTa['status_bayar'] == 'Belum Lunas' ? 'checked' : ''?> disabled>
                        <label class="custom-control-label" for="customRadio2">Belum Lunas</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="recipient-name" class="col-form-label">Metode Pembayaran :</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="metode_pembayaran" value="BNI" id="customRadio1" <?= $detailTa['metode_pembayaran'] == 'BNI' ? 'checked' : ''?> disabled>
                        <label class="custom-control-label" for="customRadio1">BNI</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="metode_pembayaran" value="Indomart" id="customRadio2" <?= $detailTa['metode_pembayaran'] == 'Indomart' ? 'checked' : ''?> disabled>
                        <label class="custom-control-label" for="customRadio2">Indomart</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tagihan :</label>
            <input type="text" class="form-control" name="tagihan" id="recipient-name" value="<?= $detailTa['tagihan']?>" disabled>
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Konfirmasi :</label>
            <input type="text" class="form-control" name="konfirmasi" id="recipient-name" value="<?= $detailTa['konfirmasi']?>" disabled>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Close</button>
        </div>
    </form>
</div>