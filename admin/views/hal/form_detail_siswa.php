<div class="modal-header">
    <h5 class="modal-title font-weight-bolder text-primary text-gradient" id="editModalLabel">Detail Siswa</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>

<div class="modal-body">
    <form >
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">NISN :</label>
            <input type="number" class="form-control" name="nisn" value="<?= $detailTa['nisn']?>" id="recipient-name" disabled>
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama :</label>
            <input type="text" class="form-control" name="nama" id="recipient-name" value="<?= $detailTa['nama']?>" disabled>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="recipient-name" class="col-form-label">Jenis Kelamin :</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="jk" value="P" id="customRadio1" <?= $detailTa['jk'] == 'P' ? 'checked' : ''?> disabled>
                        <label class="custom-control-label" for="customRadio1">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="jk" value="L" id="customRadio2" <?= $detailTa['jk'] == 'L' ? 'checked' : ''?> disabled>
                        <label class="custom-control-label" for="customRadio2">Laki-laki</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tempat Lahir :</label>
            <input type="text" class="form-control" name="tmp_lahir" id="recipient-name" value="<?= $detailTa['tmp_lahir']?>" disabled>
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tgl Lahir :</label>
            <input type="date" class="form-control" name="tgl_lahir" id="recipient-name" value="<?= $detailTa['tgl_lahir']?>" disabled>
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nohp :</label>
            <input type="text" class="form-control" name="no_hp" id="recipient-name" value="<?= $detailTa['no_hp']?>" disabled>
        </div>
        <div class="form-group">
            <label for="message-text" class="col-form-label">Alamat :</label>
           <textarea name="alamat" class="form-control" id="message-text" disabled><?= $detailTa['alamat']?></textarea>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Close</button>
        </div>
    </form>
</div>