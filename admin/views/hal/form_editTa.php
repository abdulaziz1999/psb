<div class="modal-header">
    <h5 class="modal-title font-weight-bolder text-primary text-gradient" id="editModalLabel">Edit
        Tahunajar</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <form method="POST" action="controllers/tahunajarController.php">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tahun Ajar:</label>
            <input type="text" class="form-control" name="tahun_ajar" value="<?= $detailTa['tahun_ajar']?>"
                id="recipient-name">
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="recipient-name" class="col-form-label">Status:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="status" value="active"
                            <?= $detailTa['status'] == 'active' ? 'checked' : '' ?> id="customRadio1">
                        <label class="custom-control-label" for="customRadio1">Active</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="status" value="inactive"
                            <?= $detailTa['status'] == 'inactive' ? 'checked' : '' ?> id="customRadio2">
                        <label class="custom-control-label" for="customRadio2">Non Active</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="proses" value="ubah" class="btn bg-gradient-primary">Edit</button>
            <input type="hidden" name="idx" value="<?= $detailTa['id_tahun_ajar']?>" />
        </div>
    </form>
</div>