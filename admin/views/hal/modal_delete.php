<div class="modal-header">
    <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<form action="<?= $urldel?>" method="post">
    <div class="modal-body">
        <div class="py-3 text-center">
            <i class="ni ni-bell-55 ni-3x"></i>
            <h4 class="text-gradient text-danger mt-4">Anda Yakin ingin Menghapus ?</h4>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary ml-auto" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="proses" value="hapus" class="btn bg-gradient-danger">Ok, Delete</button>
        <input type="hidden" name="idx" value="<?= $id_del?>">
    </div>
</form>